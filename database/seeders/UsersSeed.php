<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::where('email','admin@admin.com')->count();
        if ($user < 1) {
            return User::create([
                'name' => 'admin',
                'email' => 'admin@admin.com',
                'password' => Hash::make('password'),
            ]);
        }
    }
}
