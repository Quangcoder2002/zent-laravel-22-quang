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
                'user' => [
                    'name' => 'Admin',
                    'email' => 'admin12@gmail.com',
                    'password' => bcrypt('12345678'),
                    'avatar' => '',
                    'status' => '0',
                    'create_at' => now(),
                    'updated_at' => now()
                ],
                'info' => [
                    'address' => 'Ha Noi',
                    'phone' => '1231231231'
                ]  
            ],
            [
                'user' => [
                    'name' => 'Admin1',
                    'email' => 'admin121@gmail.com',
                    'password' => bcrypt('12345678'),
                    'avatar' => '',
                    'status' => '0',
                    'create_at' => now(),
                    'updated_at' => now()
                ],
                'info' => [
                    'address' => 'Ha Noi',
                    'phone' => '1231231231',
                ] 
            ],
            [
                'user' => [
                    'name' => 'Admin2',
                    'email' => 'admin1221@gmail.com',
                    'password' => bcrypt('12345678'),
                    'avatar' => '',
                    'status' => '0',
                    'create_at' => now(),
                    'updated_at' => now()
                ],
                'info' => [
                    'address' => 'Ha Noi',
                    'phone' => '1231313131',
                ]
            ],
            [
                'user' => [
                    'name' => 'Admin3',
                    'email' => 'admin1211@gmail.com',
                    'password' => bcrypt('12345678'),
                    'avatar' => '',
                    'status' => '0',
                    'create_at' => now(),
                    'updated_at' => now()
                ],
                'info' => [
                    'address' => 'Ha Noi',
                    'phone' => '123465651'
                ]
                
            ],
            [
                'user' => [
                    'name' => 'Admin4',
                    'email' => 'admin12121@gmail.com',
                    'password' => bcrypt('12345678'),
                    'avatar' => '',
                    'status' => '0',
                    'create_at' => now(),
                    'updated_at' => now()
                ],
                'info' => [
                    'address' => 'Ha Noi',
                    'phone' => '1234232651'
                ]
            ],
            [
                'user' => [
                    'name' => 'Admin5',
                    'email' => 'admin5@gmail.com',
                    'password' => bcrypt('12345678'),
                    'avatar' => '',
                    'status' => '1',
                    'create_at' => now(),
                    'updated_at' => now()
                ],
                'info' => [
                    'address' => 'Ha Noi',
                    'phone' => '1234232651'
                ]
            ]
        ];
        foreach($users as $user){
            $user_id = DB::table('users')->insertGetId($user['user']);
            $user['info']['user_id'] = $user_id;
            DB::table('user_infos')->insert($user['info']);
        }
            
    }
}
