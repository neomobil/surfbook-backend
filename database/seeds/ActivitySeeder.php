<?php

use App\Models\Activity;
use App\Models\ActivityImages;
use Illuminate\Database\Seeder;

class ActivitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Activity::class, 10)->create();
    }
}
