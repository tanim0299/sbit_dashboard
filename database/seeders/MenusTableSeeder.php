<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MenusTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('menus')->delete();
        
        \DB::table('menus')->insert(array (
            0 => 
            array (
                'bn_name' => 'ড্যাশবোর্ড',
                'created_at' => '2023-03-19 14:04:30',
                'created_by' => 1,
                'deleted_at' => NULL,
                'deleted_by' => NULL,
                'icon' => 'uil-home-alt',
                'id' => 1,
                'is_hidden' => 'No',
                'name' => 'Dashboard',
                'order_by' => 4,
                'parent_id' => NULL,
                'route_name' => 'dashboard',
                'status' => 1,
                'system_name' => 'Dashboard',
                'updated_at' => '2023-04-03 10:38:48',
                'updated_by' => 1,
            ),
            1 => 
            array (
                'bn_name' => 'ইউজার ম্যানেজমেন্ট',
                'created_at' => '2023-03-19 18:06:39',
                'created_by' => 1,
                'deleted_at' => NULL,
                'deleted_by' => NULL,
                'icon' => NULL,
                'id' => 2,
                'is_hidden' => 'No',
                'name' => 'User Management',
                'order_by' => 5,
                'parent_id' => NULL,
                'route_name' => NULL,
                'status' => 1,
                'system_name' => 'User Management',
                'updated_at' => '2023-04-03 10:38:48',
                'updated_by' => 1,
            ),
            2 => 
            array (
                'bn_name' => 'ইউজার',
                'created_at' => '2023-03-19 18:08:09',
                'created_by' => 1,
                'deleted_at' => NULL,
                'deleted_by' => NULL,
                'icon' => NULL,
                'id' => 3,
                'is_hidden' => 'No',
                'name' => 'User',
                'order_by' => 1,
                'parent_id' => 2,
                'route_name' => 'user.index',
                'status' => 1,
                'system_name' => 'User',
                'updated_at' => '2023-03-31 18:10:57',
                'updated_by' => 1,
            ),
            3 => 
            array (
                'bn_name' => 'রোল ম্যানেজমেন্ট',
                'created_at' => '2023-03-19 18:14:26',
                'created_by' => 1,
                'deleted_at' => NULL,
                'deleted_by' => NULL,
                'icon' => NULL,
                'id' => 4,
                'is_hidden' => 'No',
                'name' => 'Role Management',
                'order_by' => 6,
                'parent_id' => NULL,
                'route_name' => NULL,
                'status' => 1,
                'system_name' => 'Role Management',
                'updated_at' => '2023-04-03 10:38:48',
                'updated_by' => 1,
            ),
            4 => 
            array (
                'bn_name' => 'রোল',
                'created_at' => '2023-03-19 18:17:21',
                'created_by' => 1,
                'deleted_at' => NULL,
                'deleted_by' => NULL,
                'icon' => NULL,
                'id' => 5,
                'is_hidden' => 'No',
                'name' => 'Role',
                'order_by' => 1,
                'parent_id' => 4,
                'route_name' => 'role.index',
                'status' => 1,
                'system_name' => 'Role',
                'updated_at' => '2023-03-31 18:11:32',
                'updated_by' => 1,
            ),
            5 => 
            array (
                'bn_name' => 'মেন্যু ম্যানেজমেন্ট',
                'created_at' => '2023-04-03 10:38:48',
                'created_by' => 1,
                'deleted_at' => NULL,
                'deleted_by' => NULL,
                'icon' => NULL,
                'id' => 25,
                'is_hidden' => 'No',
                'name' => 'Menu Management',
                'order_by' => 1,
                'parent_id' => NULL,
                'route_name' => '',
                'status' => 1,
                'system_name' => 'Menu Management',
                'updated_at' => '2023-04-03 10:38:48',
                'updated_by' => 1,
            ),
            6 => 
            array (
                'bn_name' => 'মেন্যু',
                'created_at' => '2023-04-03 10:39:32',
                'created_by' => 1,
                'deleted_at' => NULL,
                'deleted_by' => NULL,
                'icon' => NULL,
                'id' => 26,
                'is_hidden' => 'No',
                'name' => 'Menu',
                'order_by' => 1,
                'parent_id' => 25,
                'route_name' => 'menu.index',
                'status' => 1,
                'system_name' => 'Menu',
                'updated_at' => '2023-04-03 10:39:32',
                'updated_by' => 1,
            ),
        ));
        
        
    }
}