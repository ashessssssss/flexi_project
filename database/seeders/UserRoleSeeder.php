<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;

class UserRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $adminRole = Role::where('nombre', 'admin')->first();
        $userRole = Role::where('nombre', 'user')->first();

        // Asignar el rol de administrador a usuarios específicos
        $adminUserIds = [1, 3, 4]; // IDs de usuarios que serán administradores
        foreach ($adminUserIds as $userId) {
            $user = User::find($userId);
            if ($user) {
                $user->roles()->attach($adminRole->id);
            }
        }

        // Asegurarse de que todos los demás usuarios sean usuarios estándar
        $otherUsers = User::whereNotIn('id', $adminUserIds)->get();
        foreach ($otherUsers as $user) {
            $user->roles()->syncWithoutDetaching([$userRole->id]);
        }

    }
}
