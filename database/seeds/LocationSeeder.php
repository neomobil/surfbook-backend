<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('locations')->insert([
            'name' => 'Zagykazetta',
            'address' => 'Krúdy Gy. 15.',
            'city' => 'Balatonfűzfő',
            'country' => 'Hungary',
            'postcode' => '8175',
            'geolocation' => DB::raw("PointFromText('POINT(47.051678 18.052275)')"),
            'created_at' => date('Y-m-d H:i:s')
        ]);
    }
}
