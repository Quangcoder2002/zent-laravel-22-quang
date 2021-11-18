<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $this->call(PostsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(Post_TagTableSeeder::class);
        $this->call(RolePermissionSeeder::class);
        $this->call(TagsTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
        $this->call(Prod_CategorysTableSeeder::class);
    }
}
