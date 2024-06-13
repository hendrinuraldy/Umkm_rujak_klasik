<?php

namespace App\Http\Controllers;

use App\Models\Testimoni;
use Exception;
use Illuminate\Http\Request;

class TestimoniController extends Controller
{
    public function store(Request $request)
    {

        $validate = $request->validate([
            'nama' => ['required', 'min:3', 'max:100'],
            'no_telp' => ['required', 'max:12'],
            'image' => ['required', 'mimes:png,jpg,jpeg,svg', 'max:8192'],
        ], [
            'nama.required' => 'Nama customer wajib diisi!',
            'nama.min' => 'Panjang minimal nama customer 3 karakter!',
            'nama.max' => 'Panjang maksimal nama customer 100 karakter!',
            'no_telp.required' => 'Nomor telepon harus diisi!',
            'no_telp.max' => 'Panjang nomor maksimal adalah 15',
            'image.required' => 'Upload gambar wajib diisi!',
            'image.mimes' => 'Hanya dapat mengupload file bertipe : png,jpg,jpeg,svg',
            'images.max' => 'Ukuran maksimum gambar adalah 8mb!',

        ]);

        $fileName = time() . '-' . $request->image->getClientOriginalname();

        try {
            Testimoni::create([
                'name' => $request->nama,
                'no_telp' => $request->no_telp,
                'gambar' => $fileName,
            ]);

            // Taro hard copy file ke dalam folder thumbnail yg ada di public
            $request->image->storeAs('testimoni', $fileName, 'public');
            toast('Testimoni berhasil ditambah!', 'success');
            return redirect()->back();
        } catch (Exception $e) {
            toast('Testimoni gagal ditambah!', 'error');
            return redirect()->back();
        }

    }

    public function destroy($id)
    {
        $data = Testimoni::where('id', $id)->first();
        if ($data != null) {
            if (file_exists(public_path('/storage/testimoni/' . $data->gambar))) {
                unlink(public_path('/storage/testimoni/' . $data->gambar));
                $data->delete();
                toast('Testimoni berhasil dihapus', 'success');
                return redirect()->back();
            }
            toast('Testimoni gagal dihapus', 'error');
            return redirect()->route('admin.review');
        } else {
            toast('Testimoni gagal dihapus', 'error');
            return redirect()->back();
        }
    }
}
