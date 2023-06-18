<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
class PersonnelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $user = new User();
        $user->user_name = 'admin';
        $user->user_firstname = 'admin';
        $user->email = 'admin@gmail.com';
        $user->fk_role_id=3;
        $user->password = Hash::make('password');
        $user->save();
    }
}