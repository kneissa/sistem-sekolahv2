<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userTeacherEmail = 'kaneisha@ski.sch.id';
        $userStudentEmail = 'budi@ski.sch.id';

        // User Teacher
        User::updateOrCreate(
            ['email' => $userTeacherEmail],
            [
                'name' => 'Kaneisha Eliorra',
                'password' => bcrypt('password'),
                'role' => 'teacher'
            ]
        );

         // User Student
        User::updateOrCreate(
            ['email' => $userStudentEmail],
            [
                'name' => 'Budi',
                'password' => bcrypt('password'),
                'role' => 'student'
            ]
        );
    }
}
