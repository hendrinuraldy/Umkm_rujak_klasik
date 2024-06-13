<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MenuRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nama' => ['required', 'min:3', 'max:100', 'unique:menu,nama'],
            'harga' => ['required', 'numeric', 'min:400'],
            'kategori' => ['required'],
            'deskripsi' => ['required'],
            'image' => ['required', 'mimes:png,jpg,jpeg,svg', 'file', 'max:8192'],
        ];
    }

    public function messages(): array
    {
        return [
            'nama.required' => 'Nama menu wajib diisi!',
            'nama.min' => 'Panjang minimal nama menu 3 karakter!',
            'nama.max' => 'Panjang maksimal nama menu 100 karakter!',
            'nama.unique' => 'Nama menu sudah terpakai, coba yang lain!',
            'harga.required' => 'Harga harus diisi!',
            'harga.min' => 'Harga minimal adalah 400 perak',
            'kategori.required' => 'Kategori harus diisi!',
            'deskripsi.required' => 'Deskripsi menu wajib diisi!',
            'image.required' => 'Upload gambar wajib diisi!',
            'image.mimes' => 'Hanya dapat mengupload file bertipe: png, jpg, jpeg, svg',
            'image.max' => 'Ukuran maksimum gambar adalah 8mb!',
        ];
    }
}
