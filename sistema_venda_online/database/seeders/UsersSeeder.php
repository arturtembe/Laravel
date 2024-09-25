<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'firstname'=>'Artur',
            'lastname'=>'Jaime',
            'email'=>'artur@email.com',
            'password'=>bcrypt('12345678')
        ]);
    }
}
