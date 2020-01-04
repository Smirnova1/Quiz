<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class QuestionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now();

        DB::table('questions')->delete();

        DB::table('questions')->insert([
            'id' => 1,
            'question' => 'Which of the following is the way to create comments in PHP?',
            'topic_id' => 1,
            'created_at' => $now,
            'updated_at' => $now,
            'type' => 'checkbox'
        ]);
        DB::table('questions')->insert([
            'id' => 2,
            'question' => 'Which of the following method can be used to close a MySql database using PHP?',
            'topic_id' => 1,
            'created_at' => $now,
            'updated_at' => $now,
            'type' => 'radio'
        ]);
        DB::table('questions')->insert([
            'id' => 3,
            'question' => 'Which of the following keyword causes the loop to skip the remainder of its body and immediately retest its condition prior to reiterating?',
            'topic_id' => 1,
            'created_at' => $now,
            'updated_at' => $now,
            'type' => 'text'
        ]);
        DB::table('questions')->insert([
            'id' => 4,
            'question' => 'How to run migrations?',
            'topic_id' => 2,
            'created_at' => $now,
            'updated_at' => $now,
            'type' => 'text'
        ]);
        DB::table('questions')->insert([
            'id' => 5,
            'question' => 'Which method breaks the collection into multiple, smaller collections of a given size?',
            'topic_id' => 2,
            'created_at' => $now,
            'updated_at' => $now,
            'type' => 'radio'
        ]);
        DB::table('questions')->insert([
            'id' => 6,
            'question' => 'Which of following methods are used in database migrations classes?',
            'topic_id' => 2,
            'created_at' => $now,
            'updated_at' => $now,
            'type' => 'checkbox'
        ]);
        DB::table('questions')->insert([
            'id' => 7,
            'question' => 'Which SQL statement is used to insert new data in a database?',
            'topic_id' => 3,
            'created_at' => $now,
            'updated_at' => $now,
            'type' => 'text'
        ]);
        DB::table('questions')->insert([
            'id' => 8,
            'question' => 'Which is the default order of sort in ORDER BY clause?',
            'topic_id' => 3,
            'created_at' => $now,
            'updated_at' => $now,
            'type' => 'radio'
        ]);
        DB::table('questions')->insert([
            'id' => 9,
            'question' => 'Which SQL statement is not used to extract data from the database?',
            'topic_id' => 3,
            'created_at' => $now,
            'updated_at' => $now,
            'type' => 'checkbox'
        ]);

    }
}
