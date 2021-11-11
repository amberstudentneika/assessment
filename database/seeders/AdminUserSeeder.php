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
            'gender'=> 'female',
            'dob'=>'2021-5-5',
            'role' => '0',
            'password' => Hash::make('password')
        ]);
    }
}
