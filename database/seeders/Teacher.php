<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class Teacher extends Seeder
{
    /**
     * Run the database seeds.
     */
    protected static ?string $password;

    public function run(): void
    {
        User::create([
            'name' => 'Teacher',
            'email'=> 'teacher@gmail.com',
            'email_verified_at' => now(),
            'phone'=> '01066352916',
            'country'=> 'Egypt',
            'age'=> 44,
            'gender'=> 'femail',
            'password' => static::$password ??= Hash::make('password'),
            'remember_token' => Str::random(10),
            'user_type'=> 'teacher',
        ]);
    }
}
