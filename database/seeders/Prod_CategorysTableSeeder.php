<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Prod_CategorysTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('prod_categories')->truncate();
            $prod_categories = [
                [
                    'name' => 'Điên thoại',
                    'slug' => 'dien-thoại',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'name' => 'Điên thoại1',
                    'slug' => 'dien-thoại-1',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'name' => 'Laptop',
                    'slug' => 'laptop',
                    'created_at' => now(),
                    'updated_at' => now()
                ]
            ];
        DB::table('prod_categories')->insert($prod_categories);
    }
}
