<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class TopicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now();

        DB::table('topics')->delete();

        DB::table('topics')->insert([
            'id' => 1,
            'title' => 'PHP test',
            'category_id' => 1,
            'created_at' => $now,
            'updated_at' => $now
        ]);

        DB::table('topics')->insert([
            'id' => 2,
            'title' => 'Laravel test',
            'category_id' => 1,
            'created_at' => $now,
            'updated_at' => $now
        ]);

        DB::table('topics')->insert([
            'id' => 3,
            'title' => 'MySQL test',
            'category_id' => 2,
            'created_at' => $now,
            'updated_at' => $now
        ]);
    }
}
