<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Hash;
class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::create([
            'fName' => 'Shaneika',
            'lName' => 'Lewis',
            'email' => 'slewis@gmail.com',
            'role' => '0',
            'password' => Hash::make('password')
        ]);
    }
}
