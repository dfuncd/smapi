<?php

use PHPUnit\Framework\TestCase;

use Api\Platform;

class PlatformTest extends TestCase
{
    protected $platform;

    protected function setUp()
    {
        $this->platform = new Platform;
    }

    public function testGetIndex()
    {
        $this->assertInstanceOf(\Illuminate\Http\JsonResponse::class, $this->platform->getIndex());
    }
}
