<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now();

        DB::table('categories')->delete();

        DB::table('categories')->insert([
            'id' => 1,
            'category' => 'PHP',
            'created_at' => $now,
            'updated_at' => $now
        ]);

        DB::table('categories')->insert([
            'id' => 2,
            'category' => 'DATABASE',
            'created_at' => $now,
            'updated_at' => $now
        ]);

    }
}
