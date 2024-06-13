<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Menyusun array untuk multiple data
        $categories = [
            ['kategori' => 'rujak',
                'created_at' => now(),
                'updated_at' => now()],
            ['kategori' => 'ubi',
                'created_at' => now(),
                'updated_at' => now()],
            // Tambahkan data lainnya sesuai kebutuhan
        ];

        // Gunakan insert untuk menambahkan multiple data sekaligus
        Category::insert($categories);
    }
}
