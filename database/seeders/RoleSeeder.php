<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $adminRole = Role::create(['nombre' => 'admin', 'descripcion' => 'Administrator']);
        $userRole = Role::create(['nombre' => 'user', 'descripcion' => 'Standard User']);
    }
        
}
