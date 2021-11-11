<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Hash;
class StudentUserSeeder extends Seeder
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
            'fName' => 'Student',
            'lName' => 'test',
            'email' => 'student@gmail.com',
            'gender'=> 'female',
            'dob'=>'2021-5-5',
            'role' => '1',
            'password' => Hash::make('password')
        ]);
    }
}
