<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Services\InspiringService;

class InspiringServiceTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testInspire()
    {
        self::assertIsString(
            (new InspiringService())->inspire()
        );
    }
}
