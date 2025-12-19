<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Hapus atau beri komentar user lain jika tidak diperlukan
        // dan fokus pada satu user admin yang jelas.
        User::create([
            'name' => 'Admin',
            'email' => 'akunc4086@gmail.com',
            'password' => Hash::make('admin123'),
        ]);
    }
}
