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
                'content' => 'content post',
                'user_created_id' => 1,
                'user_updated_id' => 1,
                'category_id' => 1,
                'status' => 0
            ],
            [
                'title' => 'posts1',
                'slug' => 'posts1',
                'content' => 'content post1',
                'user_created_id' => 1,
                'user_updated_id' => 1,
                'category_id' => 1,
                'status' => 2
            ],
            [
                'title' => 'posts2',
                'slug' => 'posts2',
                'content' => 'content post2',
                'user_created_id' => 1,
                'user_updated_id' =>1,
                'category_id' => 3,
                'status' => 1
            ],
            [
                'title' => 'posts3',
                'slug' => 'posts3',
                'content' => 'content post3',
                'user_created_id' => 1,
                'user_updated_id' =>1,
                'category_id' => 2,
                'status' => 1
            ],
            [
                'title' => 'posts4',
                'slug' => 'posts4',
                'content' => 'content post4',
                'user_created_id' => 1,
                'user_updated_id' =>1,
                'category_id' => 1,
                'status' => 0
            ],
            [
                'title' => 'posts5',
                'slug' => 'posts5',
                'content' => 'content post5',
                'user_created_id' => 1,
                'user_updated_id' =>1,
                'category_id' => 1,
                'status' => 0
            ],
            [
                'title' => 'posts6',
                'slug' => 'posts6',
                'content' => 'content post6',
                'user_created_id' => 1,
                'user_updated_id' =>1,
                'category_id' => 1,
                'status' => 0
            ],
            [
                'title' => 'posts7',
                'slug' => 'posts7',
                'content' => 'content post7',
                'user_created_id' => 1,
                'user_updated_id' =>1,
                'category_id' => 1,
                'status' => 0
            ],
            [
                'title' => 'posts8',
                'slug' => 'posts8',
                'content' => 'content post8',
                'user_created_id' => 1,
                'user_updated_id' =>1,
                'category_id' => 1,
                    'status' => 0
            ],
            [
                'title' => 'posts9',
                'slug' => 'posts9',
                'content' => 'content post9',
                'user_created_id' => 1,
                'user_updated_id' =>1,
                'category_id' => 1,
                'status' => 0
            ],
         ];
         DB::table('posts')->insert($posts);
        
    }
}
