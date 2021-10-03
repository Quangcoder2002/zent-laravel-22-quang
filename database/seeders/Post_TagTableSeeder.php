<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Post_TagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('post_tag')->truncate();
        $tag = [
            [
                'post_id' => 1,
                'tag_id' => 2
            ],
            [
                'post_id' => 2,
                'tag_id' => 2
            ],
            [
                'post_id' => 3,
                'tag_id' => 1
            ],
            [
                'post_id' => 4,
                'tag_id' => 1
            ],
            [
                'post_id' => 5,
                'tag_id' => 1
            ]
        ];
        DB::table('post_tag')->insert($tag);
    }
}
