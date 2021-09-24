<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->truncate();
        $categories = [
            ['name'=>'Thời sự'],
            ['name'=>'Thể thao'],
            ['name'=>'Giải trí']
        ];
        foreach ($categories as $category)
        {
            DB::table('categories')->insert($category);
        }
    }
}
