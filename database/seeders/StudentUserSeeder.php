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
            'role' => '1',
            'password' => Hash::make('password')
        ]);
    }
}
