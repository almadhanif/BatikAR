<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'Malik Fajar',
            'email' => 'malikfajar@gmail.com',
            'password' => Hash::make('12345678'),
        ]);

        $user->role = '1';
        $user->save();
    }
}
