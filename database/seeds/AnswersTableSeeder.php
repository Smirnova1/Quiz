<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class AnswersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now();

        DB::table('answers')->delete();

        DB::table('answers')->insert([
            'id' => 1,
            'answer' => '# commented code to end of line',
            'is_correct' => 1,
            'question_id' => 1,
            'created_at' => $now,
            'updated_at' => $now
        ]);
        DB::table('answers')->insert([
            'id' => 2,
            'answer' => '// commented code to end of line',
            'is_correct' => 1,
            'question_id' => 1,
            'created_at' => $now,
            'updated_at' => $now
        ]);
        DB::table('answers')->insert([
            'id' => 3,
            'answer' => '/* commented code here */',
            'is_correct' => 1,
            'question_id' => 1,
            'created_at' => $now,
            'updated_at' => $now
        ]);
        DB::table('answers')->insert([
            'id' => 4,
            'answer' => '{{commented code here}}',
            'is_correct' => 0,
            'question_id' => 1,
            'created_at' => $now,
            'updated_at' => $now
        ]);
        DB::table('answers')->insert([
            'id' => 5,
            'answer' => 'mysql_connect()',
            'is_correct' => 0,
            'question_id' => 2,
            'created_at' => $now,
            'updated_at' => $now
        ]);
        DB::table('answers')->insert([
            'id' => 6,
            'answer' => 'mysql_close()',
            'is_correct' => 1,
            'question_id' => 2,
            'created_at' => $now,
            'updated_at' => $now
        ]);
        DB::table('answers')->insert([
            'id' => 7,
            'answer' => 'mysql_query()',
            'is_correct' => 0,
            'question_id' => 2,
            'created_at' => $now,
            'updated_at' => $now
        ]);
        DB::table('answers')->insert([
            'id' => 8,
            'answer' => 'continue',
            'is_correct' => 1,
            'question_id' => 3,
            'created_at' => $now,
            'updated_at' => $now
        ]);
        DB::table('answers')->insert([
            'id' => 9,
            'answer' => 'php artisan migrate',
            'is_correct' => 1,
            'question_id' => 4,
            'created_at' => $now,
            'updated_at' => $now
        ]);
        DB::table('answers')->insert([
            'id' => 10,
            'answer' => 'chunk()',
            'is_correct' => 1,
            'question_id' => 5,
            'created_at' => $now,
            'updated_at' => $now
        ]);
        DB::table('answers')->insert([
            'id' => 11,
            'answer' => 'sortBy()',
            'is_correct' => 0,
            'question_id' => 5,
            'created_at' => $now,
            'updated_at' => $now
        ]);
        DB::table('answers')->insert([
            'id' => 12,
            'answer' => 'split()',
            'is_correct' => 0,
            'question_id' => 5,
            'created_at' => $now,
            'updated_at' => $now
        ]);
        DB::table('answers')->insert([
            'id' => 13,
            'answer' => 'up()',
            'is_correct' => 1,
            'question_id' => 6,
            'created_at' => $now,
            'updated_at' => $now
        ]);
        DB::table('answers')->insert([
            'id' => 14,
            'answer' => 'down()',
            'is_correct' => 1,
            'question_id' => 6,
            'created_at' => $now,
            'updated_at' => $now
        ]);
        DB::table('answers')->insert([
            'id' => 15,
            'answer' => 'run()',
            'is_correct' => 0,
            'question_id' => 6,
            'created_at' => $now,
            'updated_at' => $now
        ]);
        DB::table('answers')->insert([
            'id' => 16,
            'answer' => 'insert into',
            'is_correct' => 1,
            'question_id' => 7,
            'created_at' => $now,
            'updated_at' => $now
        ]);
        DB::table('answers')->insert([
            'id' => 17,
            'answer' => 'Ascending',
            'is_correct' => 1,
            'question_id' => 8,
            'created_at' => $now,
            'updated_at' => $now
        ]);
        DB::table('answers')->insert([
            'id' => 18,
            'answer' => 'Descending',
            'is_correct' => 0,
            'question_id' => 8,
            'created_at' => $now,
            'updated_at' => $now
        ]);
        DB::table('answers')->insert([
            'id' => 19,
            'answer' => 'select',
            'is_correct' => 0,
            'question_id' => 9,
            'created_at' => $now,
            'updated_at' => $now
        ]);
        DB::table('answers')->insert([
            'id' => 20,
            'answer' => 'update',
            'is_correct' => 1,
            'question_id' => 9,
            'created_at' => $now,
            'updated_at' => $now
        ]);
        DB::table('answers')->insert([
            'id' => 21,
            'answer' => 'delete',
            'is_correct' => 1,
            'question_id' => 9,
            'created_at' => $now,
            'updated_at' => $now
        ]);

    }
}
