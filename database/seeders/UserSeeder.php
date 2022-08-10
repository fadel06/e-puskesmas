<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'username' => 'admin',
            'password' => 'password',
        ]);

        $admin->assignRole('admin');

        $user = User::create([
            'username' => 'test_user',
            'password' => 'password',
        ]);

        $user->assignRole('user');
    }
}
