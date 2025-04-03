<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder

{

    public function run()
{
    User::firstOrCreate(
        ['email' => 'eyeverin@hotmail.com'],
        [
            'name' => 'Yeverino',
            'password' => Hash::make('Dar1n4'),
            'email_verified_at' => now(),
        ]
    );
}

}
