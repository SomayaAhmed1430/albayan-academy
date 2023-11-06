<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class Student extends Seeder
{
    /**
     * Run the database seeds.
     */
    protected static ?string $password;

    public function run(): void
    {
        User::create([
            'name' => 'Student',
            'email'=> 'student@gmail.com',
            'email_verified_at' => now(),
            'phone'=> '01200209895',
            'country'=> 'Egypt',
            'age'=> 19,
            'gender'=> 'mail',
            'password' => static::$password ??= Hash::make('password'),
            'remember_token' => Str::random(10),
            'user_type'=> 'student',
        ]);
    }
}
