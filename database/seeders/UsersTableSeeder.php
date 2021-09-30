<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();
        $users =[
            [
                'name' => 'Admin',
                'email' => 'admin12@gmail.com',
                'password' => bcrypt('12345678'),
                'avatar' => '',
                'address' => 'Ha Noi',
                'phone' => '1231231231',
                'status' => '0'
            ],
            [
                'name' => 'Admin1',
                'email' => 'admin121@gmail.com',
                'password' => bcrypt('12345678'),
                'avatar' => '',
                'address' => 'Ha Noi',
                'phone' => '1231231231',
                'status' => '0'
            ],
            [
                'name' => 'Admin2',
                'email' => 'admin1221@gmail.com',
                'password' => bcrypt('12345678'),
                'avatar' => '',
                'address' => 'Ha Noi',
                'phone' => '1231313131',
                'status' => '0'
            ],
            [
                'name' => 'Admin3',
                'email' => 'admin1211@gmail.com',
                'password' => bcrypt('12345678'),
                'avatar' => '',
                'address' => 'Ha Noi',
                'phone' => '123465651',
                'status' => '0'
            ],
            [
                'name' => 'Admin4',
                'email' => 'admin12121@gmail.com',
                'password' => bcrypt('12345678'),
                'avatar' => '',
                'address' => 'Ha Noi',
                'phone' => '1234232651',
                'status' => '0'
            ],
            [
                'name' => 'Admin5',
                'email' => 'admin5@gmail.com',
                'password' => bcrypt('12345678'),
                'avatar' => '',
                'address' => 'Ha Noi',
                'phone' => '1234232651',
                'status' => '1'
            ]
        ];
            DB::table('users')->insert($users);
    }
}
