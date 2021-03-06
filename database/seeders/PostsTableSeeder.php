<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('posts')->truncate();
         $posts =[
            [
                'title' => 'posts',
                'slug' => 'posts',
                'short_content' => 'adsadasd',
                'content' => 'content post',
                'user_created_id' => 1,
                'user_updated_id' => 1,
                'category_id' => 1,
                'status' => 0,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'posts1',
                'slug' => 'posts1',
                'short_content' => 'adsadasd',
                'content' => 'content post1',
                'user_created_id' => 2,
                'user_updated_id' => 2,
                'category_id' => 1,
                'status' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'posts2',
                'slug' => 'posts2',
                'short_content' => 'adsadasd',
                'content' => 'content post2',
                'user_created_id' => 3,
                'user_updated_id' => 3,
                'category_id' => 3,
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'posts3',
                'slug' => 'posts3',
                'short_content' => 'adsadasd',
                'content' => 'content post3',
                'user_created_id' => 1,
                'user_updated_id' =>1,
                'category_id' => 2,
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'posts4',
                'slug' => 'posts4',
                'short_content' => 'adsadasd',
                'content' => 'content post4',
                'user_created_id' => 4,
                'user_updated_id' =>4,
                'category_id' => 1,
                'status' => 0,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'posts5',
                'slug' => 'posts5',
                'short_content' => 'adsadasd',
                'content' => 'content post5',
                'user_created_id' => 1,
                'user_updated_id' =>1,
                'category_id' => 1,
                'status' => 0,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'posts6',
                'slug' => 'posts6',
                'short_content' => 'adsadasd',
                'content' => 'content post6',
                'user_created_id' => 1,
                'user_updated_id' =>1,
                'category_id' => 1,
                'status' => 0,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'posts7',
                'slug' => 'posts7',
                'short_content' => 'adsadasd',
                'content' => 'content post7',
                'user_created_id' => 1,
                'user_updated_id' =>1,
                'category_id' => 1,
                'status' => 0,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'posts8',
                'slug' => 'posts8',
                'short_content' => 'adsadasd',
                'content' => 'content post8',
                'user_created_id' => 1,
                'user_updated_id' =>1,
                'category_id' => 1,
                'status' => 0,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'posts9',
                'slug' => 'posts9',
                'short_content' => 'adsadasd',
                'content' => 'content post9',
                'user_created_id' => 1,
                'user_updated_id' =>1,
                'category_id' => 1,
                'status' => 0,
                'created_at' => now(),
                'updated_at' => now()
            ],
         ];
         DB::table('posts')->insert($posts);
        
    }
}
