<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       User::create([
        'name'=>'Admin',
        'email'=>'Admin@gmail.com',
        'password'=>Hash::make(12345678),
       ]);
    }
}
