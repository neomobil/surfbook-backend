<?php

namespace Tests\Unit;

use App\Models\Activity;
use Illuminate\Database\Eloquent\Collection;
use Tests\TestCase;

class ActivitiesTest extends TestCase
{
    /**
     * Test if Activity loads related images
     *
     * @return void
     */
    public function testActivityLoadsImages() :void
    {
        $activity = Activity::first();
        self::assertInstanceOf(Activity::class, $activity);
        self::assertInstanceOf(Collection::class, $activity->activityImages);
    }
}
