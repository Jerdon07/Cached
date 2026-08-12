<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $adminUser = User::create([
            'name' => 'Administrator',
            'email' => 'jdlitaoen+admin@gmail.com',
            'email_verified_at' => now(),
            'password' => 'password',
        ]);
        $adminRole = Role::where('name', 'Administrator')->first();

        $adminUser->roles()->attach($adminRole->id);
    }
}
