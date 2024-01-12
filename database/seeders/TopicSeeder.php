<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TopicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $topics = [
            [
                'topic_number' => 1,
                'topic_title' => 'Introduction to the Topic',
                'topic_content' => json_encode(['content1', 'content2']),
                'topic_objective' => 'This is the objective of the topic.',
                'subject_id' => 1, // Use the appropriate subject_id from the subjects table
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Add more topics as needed
            [
                'topic_number' => 2,
                'topic_title' => 'Introduction to the Topic',
                'topic_content' => json_encode(['content1', 'content2']),
                'topic_objective' => 'This is the objective of the topic.',
                'subject_id' => 1, // Use the appropriate subject_id from the subjects table
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'topic_number' => 3,
                'topic_title' => 'Introduction to the Topic',
                'topic_content' => json_encode(['content1', 'content2']),
                'topic_objective' => 'This is the objective of the topic.',
                'subject_id' => 1, // Use the appropriate subject_id from the subjects table
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'topic_number' => 4,
                'topic_title' => 'Introduction to the Topic',
                'topic_content' => json_encode(['content1', 'content2']),
                'topic_objective' => 'This is the objective of the topic.',
                'subject_id' => 1, // Use the appropriate subject_id from the subjects table
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'topic_number' => 1,
                'topic_title' => 'Introduction to the Topic',
                'topic_content' => json_encode(['content1', 'content2']),
                'topic_objective' => 'This is the objective of the topic.',
                'subject_id' => 2, // Use the appropriate subject_id from the subjects table
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'topic_number' => 2,
                'topic_title' => 'Introduction to the Topic',
                'topic_content' => json_encode(['content1', 'content2']),
                'topic_objective' => 'This is the objective of the topic.',
                'subject_id' => 2, // Use the appropriate subject_id from the subjects table
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        // Insert data into the topics table
        DB::table('topics')->insert($topics);
    }
}
