<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $subjects = [
            [
                'subject_title' => 'Mathematics',
                'subject_majors' => json_encode(['Accounting', 'Finance']),
                'subject_category' => 'Financial Accounting',
                'subject_semester' => 'Semester 1-2',
                'subject_description' => 'This is a mathematics subject.',
                'subject_references' => json_encode(['book1', 'book2']),
                'subject_univ' => json_encode(['university1', 'university2']),
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Add more subjects as needed
            [
                'subject_title' => 'Introduction to Accounting',
                'subject_majors' => json_encode(['Accounting', 'Finance']),
                'subject_category' => 'Financial Accounting',
                'subject_semester' => 'Semester 1-2',
                'subject_description' => 'This is a mathematics subject.',
                'subject_references' => json_encode(['book1', 'book2']),
                'subject_univ' => json_encode(['university1', 'university2']),
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'subject_title' => 'Financial Accounting',
                'subject_majors' => json_encode(['Accounting', 'Finance']),
                'subject_category' => 'Financial Accounting',
                'subject_semester' => 'Semester 3-4',
                'subject_description' => 'This is a mathematics subject.',
                'subject_references' => json_encode(['book1', 'book2']),
                'subject_univ' => json_encode(['university1', 'university2']),
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Add more subjects as needed
            [
                'subject_title' => 'Intro to Taxation',
                'subject_majors' => json_encode(['Accounting', 'Finance']),
                'subject_category' => 'Financial Accounting',
                'subject_semester' => 'Semester 1-2',
                'subject_description' => 'This is a mathematics subject.',
                'subject_references' => json_encode(['book1', 'book2']),
                'subject_univ' => json_encode(['university1', 'university2']),
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        // Insert data into the subjects table
        DB::table('subjects')->insert($subjects);
    }
}
