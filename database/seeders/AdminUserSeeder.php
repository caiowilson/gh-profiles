<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //create first admin user
        User::create([
            'name' => 'Admin',
            'email' => 'caiowilson@gmail.com',
            'password' => bcrypt('123456'),
        ]);
    }
}
