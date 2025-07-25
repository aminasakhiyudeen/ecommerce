<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Admin;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Admin::create([
            'name' => 'Amina Sakhiyudeen',
            'email' => 'aminasakhiyudeen@gmail.com',
            'password' => bcrypt("localhost")
        ]);
    }
}
