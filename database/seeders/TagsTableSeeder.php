<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Tags')->truncate();
            $tags = [
                [
                    'name' => 'Mới',
                    'slug' => 'moi',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'name' => 'Hay',
                    'slug' => 'hay',
                    'created_at' => now(),
                    'updated_at' => now()
                ]
            ];
        DB::table('Tags')->insert($tags);
    }
}
