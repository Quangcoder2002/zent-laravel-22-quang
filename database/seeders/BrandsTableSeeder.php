<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrandsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('brands')->truncate();
        $brands = [
            [
                'name' => 'Apple',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Samsung',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ];
    DB::table('brands')->insert($brands);
    }
}
