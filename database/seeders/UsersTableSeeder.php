<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::updateOrCreate(['id' => 1], [
            'name' => 'user',
            'email' => 'user@gmail.com',
            'password' => '$2y$10$YLX2vzwYop0RgAgjK2MXDOjpviWzrCyLc8h0I4XWugoKASQ4PRvo.'


        ]);
    }
}
