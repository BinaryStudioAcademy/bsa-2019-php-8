<?php

use Illuminate\Database\Seeder;
use App\Entity\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::query()->insert([
            [
                'name' => 'User',
                'email' => 'user@example.com',
                'password' => Hash::make('secret'),
                'is_admin' => false
            ],
            [
                'name' => 'Admin',
                'email' => 'admin@example.com',
                'password' => Hash::make('secret'),
                'is_admin' => true
            ]
        ]);
    }
}
