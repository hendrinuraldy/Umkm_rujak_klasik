<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Promo;
use Exception;
use Illuminate\Http\Request;

class PromoController extends Controller
{
    public function store(Request $request)
    {
        if ($request->menus == null) {
            toast('Masukan pilihan menu yang benar!', 'error');
            return redirect()->back();
        }
        $request->validate([
            'menus' => ['required'],
            'harga' => ['required', 'numeric', 'min:400'],
            'deskripsi' => ['required'],
            'image' => ['required', 'mimes:png,jpg,jpeg,svg', 'max:8192'],
        ], [
            'menus.required' => 'Silakan pilih menu dahulu!',
            'harga.required' => 'Harga harus diisi!',
            'harga.min' => 'Harga minimal adalah 400 perak',
            'deskripsi.required' => 'Deskripsi menu wajib diisi!',
            'image.required' => 'Upload gambar wajib diisi!',
            'image.mimes' => 'Hanya dapat mengupload file bertipe : png,jpg,jpeg,svg',
            'images.max' => 'Ukuran maksimum gambar adalah 8mb!',

        ],
        );

        $fileName = time() . '-' . $request->image->getClientOriginalname();

        try {
            $slugs = Menu::where('id', $request->menus)->first();
            Promo::create([
                'menu_id' => $request->menus,
                'harga' => $request->harga,
                'deskripsi' => $request->deskripsi,
                'gambar' => $fileName,
                'slug' => time() . '-' . $slugs->slug,
            ]);

            // Taro hard copy file ke dalam folder thumbnail yg ada di public
            $request->image->storeAs('promo', $fileName, 'public');
            toast('Promo berhasil ditambah!', 'success');
            return redirect()->back();
        } catch (Exception $e) {
            toast('Promo gagal ditambah!', 'error');
            return redirect()->back();
        }

    }

    public function destroy($slug)
    {
        $data = Promo::where('slug', $slug)->first();
        if ($data != null) {
            if (file_exists(public_path('/storage/promo/' . $data->gambar))) {
                unlink(public_path('/storage/promo/' . $data->gambar));
                $data->delete();
                toast('Promo berhasil dihapus', 'success');
                return redirect()->back();
            }
            toast('Promo gagal dihapus', 'error');
            return redirect()->route('admin.promo');
        } else {
            toast('Promo gagal dihapus', 'error');
            return redirect()->back();
        }
    }

    public function update($slug, Request $request)
    {
        // Validate
        $validate = $request->validate([
            'menus' => ['required'],
            'harga' => ['required', 'numeric', 'min:400'],
            'deskripsi' => ['required'],
            'image' => ['file', 'mimes:png,jpg,jpeg,svg', 'max:8092'],
        ]);

        // Find data from slug
        $promo = Promo::where('slug', $slug)->first();
        if (!$promo) {
            toast('Promo gagal diproses', 'error');
            return redirect()->back();
        }

        // Handle the image update
        if ($request->hasFile('image')) {
            // Delete the old image (optional)
            if (file_exists(public_path('/storage/promo/' . $promo->gambar))) {
                unlink(public_path('/storage/promo/' . $promo->gambar));
            }

            // Store and set the new image
            $promo->gambar = time() . '-' . $request->file('image')->getClientOriginalName();
            $request->file('image')->storeAs('promo', $promo->gambar, 'public');
        }

        $slugs = Menu::where('id', $request->menus)->first();

        // Update only the fields that are provided by the user
        $promo->fill([
            'menu_id' => $request->input('menus', $promo->menu_id),
            'harga' => $request->input('harga', $promo->harga),
            'deskripsi' => $request->input('deskripsi', $promo->deskripsi),
            'slug' => time() . '-' . $slugs->slug,
        ]);

        $promo->save();
        toast('Promo berhasil di update!', 'success');
        return redirect(route('admin.promo.show', ['slug' => $promo->slug]));
    }

}
