<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menus')->insert([
            'name' => 'activities',
            'slug' => 'activities',
            'created_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('menus')->insert([
            'name' => 'locations',
            'slug' => 'locations',
            'created_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('menus')->insert([
            'name' => 'organizations',
            'slug' => 'organizations',
            'created_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('menus')->insert([
            'name' => 'users',
            'slug' => 'users',
            'created_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
