<?php

namespace Database\Seeders;

use App\Models\Admin; 
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    public function run(): void
    {
        Admin::create([
            'email'    => 'admin.web@gmail.com',
            'password' => Hash::make('AdminWeb2026'),
        ]);
    }
}
