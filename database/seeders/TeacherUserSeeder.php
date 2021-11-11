<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Hash;
class TeacherUserSeeder extends Seeder
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
            'fName' => 'teacher',
            'lName' => 'test',
            'email' => 'teacher@gmail.com',
            'gender'=> 'female',
            'dob'=>'2021-5-5',
            'role' => '2',
            'password' => Hash::make('password')
        ]);
    }
}
