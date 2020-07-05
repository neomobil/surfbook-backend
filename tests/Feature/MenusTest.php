<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class MenusTest extends TestCase
{
    private $basePath = 'api/menus';

    /**
     * Test menus controller index method.
     *
     * @return void
     * @throws \Throwable
     */
    public function testMenusIndexMethod(): void
    {
        $response = $this->get(route('menus'));
        $decoded = $response->decodeResponseJson();

        $response->assertJsonStructure(
            ['data' => [['id', 'name', 'slug', 'image']]]
        );
        $response->assertStatus(200);
        self::assertArrayHasKey('data', $decoded);
        self::assertIsArray($decoded);
    }
}
