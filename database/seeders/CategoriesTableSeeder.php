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
            ['name'=>'Thời sự','slug'=>'thoi-su'],
            ['name'=>'Thể thao','slug'=>'the-thao'],
            ['name'=>'Giải trí','slug'=>'giai-tri']
        ];
        DB::table('categories')->insert($categories);
    }
}
