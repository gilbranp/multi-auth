<?php

namespace Database\Seeders;

use App\Models\Menu;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Menu::insert([
            [
                'name' => 'Dashboard',
                'link' => '/dashboard',
                'icon' => 'fa-tachometer-alt',
                'is_active' => 1
            ],
            [
                'name' => 'Role',
                'link' => '/role',
                'icon' => 'fa-table',
                'is_active' => 1
            ],
            [
                'name' => 'Menu',
                'link' => '/menu',
                'icon' => 'fa-bars',
                'is_active' => 1
            ],
            [
                'name' => 'Mapping Menu',
                'link' => '/mapping_menu',
                'icon' => 'fa-list',
                'is_active' => 1
            ],
            [
                'name' => 'User',
                'link' => '/user',
                'icon' => 'fa-users',
                'is_active' => 1
            ]
        ]);
    }
}
