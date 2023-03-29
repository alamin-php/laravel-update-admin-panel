<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name'=>'Al-Amin Sarker',
            'email'=>'a@a.com',
            'password'=>bcrypt('123'),
            'phone'=>'01737933939',
            'thumbnail'=>'https://picsum.photos/300',
        ]);
    }
}
