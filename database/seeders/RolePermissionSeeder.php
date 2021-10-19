<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('permissions')->truncate();
        DB::table('roles')->truncate();
        DB::table('roles_permissions')->truncate();
        DB::table('users_permissions')->truncate();
        DB::table('users_roles')->truncate();
        DB::table('permissions')->insert([
            [
                'name' => 'Create Post',
                'slug' => 'create-post'
            ],
            [
                'name' => 'Update Post',
                'slug' => 'update-post'
            ],
            [
                'name' => 'Delete Post',
                'slug' => 'delete-post'
            ],
            [
                'name' => 'Update User',
                'slug' => 'update-user'
            ],
            [
                'name' => 'Create User',
                'slug' => 'create-post'
            ],
            [
                'name' => 'Delete User',
                'slug' => 'delete-user'
            ],
            [
                'name' => '	View User',
                'slug' => 'view-user'
            ],
        ]);
        DB::table('roles')->insert([
            [
                'name' => 'Admin',
                'slug' => 'admin'
            ],
            [
                'name' => 'Admod',
                'slug' => 'admod'
            ],
            [
                'name' => 'Writer',
                'slug' => 'writer'
            ],
        ]);
    
        $create_post_permission = Permission::where('slug','create-post')->first();
        $update_post_permission = Permission::where('slug', 'update-post')->first();
        $delete_post_permission = Permission::where('slug', 'delete-post')->first();
        $create_user_permission = Permission::where('slug','create-user')->first();
        $update_user_permission = Permission::where('slug', 'update-user')->first();
        $delete_user_permission = Permission::where('slug', 'delete-user')->first();
        $view_user_permission = Permission::where('slug', 'view-user')->first();

        $admin_role = Role::where('slug','admin')->first();
        $admin_role->permissions()->attach($create_post_permission);
        $admin_role->permissions()->attach($update_post_permission);
        $admin_role->permissions()->attach($delete_post_permission);
        $admin_role->permissions()->attach($create_user_permission);
        $admin_role->permissions()->attach($update_user_permission);
        $admin_role->permissions()->attach($delete_user_permission);
        $admin_role->permissions()->attach($view_user_permission);

        $admod_role = Role::where('slug','admod')->first();
        $admod_role->permissions()->attach($create_post_permission);
        $admod_role->permissions()->attach($update_post_permission);

        $writer_role = Role::where('slug', 'writer')->first();
        $writer_role->permissions()->attach($update_post_permission);

        $admin_user = User::where('role', 'admin')->get();
        foreach ($admin_user as $admin) {
            $admin->roles()->attach($admin_role);
        }
        $admod_user = User::where('role', 'admod')->get();
        foreach ($admod_user as $admod) {
            $admod->roles()->attach($admod_role);
        }
        $writer_user = User::where('role', 'writer')->get();
        foreach ($writer_user as $writer) {
            $writer->roles()->attach($writer_role);
        }

    }
}
