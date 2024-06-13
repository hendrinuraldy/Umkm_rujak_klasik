<?php

namespace App\Http\Controllers;

use App\Http\Requests\MenuRequest;
use App\Models\Menu;
use App\Models\Promo;
use Exception;
use Illuminate\Http\File;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class MenuController extends Controller
{
    public function store(MenuRequest $request)
    {
        $validate = $request->validated();

        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            // Generate filename
            $fileName = time() . '-' . $request->image->getClientOriginalName();
            try {

                // Store the image in the 'menu' folder within the 'public' disk
                $request->image->storeAs('menu', $fileName, 'public');

                Menu::create([
                    'category_id' => $request->kategori,
                    'nama' => $request->nama,
                    'harga' => $request->harga,
                    'deskripsi' => $request->deskripsi,
                    'gambar' => $fileName,
                    'slug' => Str::slug($request->nama),
                ]);

                toast('Data berhasil ditambah!', 'success');
                return redirect()->back();
            } catch (Exception $e) {
                toast('Data gagal ditambah!', 'error');
                return redirect()->back();
            }
        } else {
            toast('File upload error!', 'error');
            return redirect()->back();
        }
    }

    public function destroy($slug)
    {
        $data = Menu::where('slug', $slug)->first();
        if ($data != null) {
            // Check if there are related records in the Promo model
            if (Promo::where('menu_id', $data->id)->exists()) {
                toast(" $data->nama memiliki relasi dengan Promo, tidak dapat dihapus", 'error');
                return redirect()->back();
            }
            if (file_exists(public_path('/storage/menu/' . $data->gambar))) {
                $data->delete();
                unlink(public_path('/storage/menu/' . $data->gambar));
                toast('Data berhasil dihapus', 'success');
                return redirect()->back();
            }
            toast('Data gagal dihapus', 'error');
            return redirect()->route('admin');
        } else {
            toast('Data gagal dihapus', 'error');
            return redirect()->back();
        }
    }

    public function update(Request $request, $slug)
    {
        // Validate
        $validate = $request->validate([
            'nama' => ['required', 'min:3', 'max:100'],
            'harga' => ['required', 'numeric', 'min:400'],
            'deskripsi' => ['required'],
            'image' => ['file', 'mimes:png,jpg,jpeg,svg', 'max:8092'],
        ]);

        // Find data from slug
        $menu = Menu::where('slug', $slug)->first();

        if (!$menu) {
            toast('Data gagal diproses', 'error');
            return redirect()->back();
        }

        // Handle the image update
        if ($request->hasFile('image')) {
            // Delete the old image (optional)
            if (file_exists(public_path('/storage/menu/' . $menu->gambar))) {
                unlink(public_path('/storage/menu/' . $menu->gambar));
            }

            // Store and set the new image
            $menu->gambar = time() . '-' . $request->file('image')->getClientOriginalName();
            $request->file('image')->storeAs('menu', $menu->gambar, 'public');
        }

        // Update only the fields that are provided by the user
        $menu->fill([
            'nama' => $request->input('nama', $menu->nama),
            'harga' => $request->input('harga', $menu->harga),
            'deskripsi' => $request->input('deskripsi', $menu->deskripsi),
            'slug' => Str::slug($request->input('nama', $menu->slug)),
        ]);

        $menu->save();
        toast('Data berhasil di update!', 'success');
        return redirect(route('menu.show', ['slug' => $menu->slug]));
    }

}
