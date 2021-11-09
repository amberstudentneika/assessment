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
            'role' => '2',
            'password' => Hash::make('password')
        ]);
    }
}
