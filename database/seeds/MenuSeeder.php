<?php

use Carbon\Carbon;
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
        $menus = [
            'activities',
            'locations',
            'organizations',
            'users',
        ];
        foreach ($menus as $menu) {
            DB::table('menus')->insert([
                'name' => $menu,
                'slug' => $menu,
                'created_at' => Carbon::now(),
            ]);
        }
    }
}
