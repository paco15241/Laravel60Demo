<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Services\InspiringService;
use App\Http\Controllers\InspiringController;

class InspiringControllerTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testInspire()
    {
        $mock = \Mockery::mock(InspiringService::class);
        $mock->shouldReceive('inspire')->andReturn('名言');
        $inspiringController = new InspiringController($mock);
        self::assertEquals(
            '名言',
            $inspiringController->inspire()
        );
    }
}
