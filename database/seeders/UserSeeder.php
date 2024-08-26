<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // eloquent laravel
        user::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('12345678'),
        ]);

        // $user = new User();
        // $user->name= 'Admin';
        // $user->email = 'admin@gmail.com';
        // $user->password = Hash::make('12345678');
        // $user->save();
    }
}
