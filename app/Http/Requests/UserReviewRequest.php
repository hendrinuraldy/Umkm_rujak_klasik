<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserReviewRequest extends FormRequest
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
            'name' => ['required', 'min:3', 'max:100'],
            'no_telepon' => ['required', 'min:11', 'max:12'],
            'comments' => ['required'],
            'star_rating' => ['required'],
        ];
    }

    public function messages()
    {
        return [
            'name.min' => 'Panjang minimal nama adalah 3 karater',
            'no_telepon.required' => 'Silakan isi kolom No.Telepon!',
            'no_telepon.min' => 'Panjang minimal nomor telepon adalah 11',
            'no_telepon.max' => 'Panjang minimal nomor telepon adalah 12',
            'star_rating.required' => 'Silakan pilih bintang!',
        ];
    }
}
