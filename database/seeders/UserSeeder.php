<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            ['username' => 'admin1',
                'email' => 'admin1@gmail.com',
                'password' => Hash::make('admin1')],
            [
                'username' => 'gunadarma',
                'email' => 'gunadarma@gmail.com',
                'password' => Hash::make('gunadarma'),
            ],
            [
                'username' => 'rujakklasik',
                'email' => 'rujakklasik@gmail.com',
                'password' => Hash::make('rujakklasik'),
            ],
        ];

        User::insert($users);
    }
}
