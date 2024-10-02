<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::insert([
            [
              'name' => 'Admin',
              'is_active' => 1
            ],
            [
              'name' => 'User',
              'is_active' => 1
            ]  
        ]);
    }
}
