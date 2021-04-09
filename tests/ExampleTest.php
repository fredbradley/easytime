<?php

namespace FredBradley\Cacher\Tests;

use FredBradley\Cacher\Cacher;
use FredBradley\Cacher\Exceptions\FrameworkNotDetected;
use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }

    /** @test */
    public function legacy_remember_returns_same_value()
    {
        $value = Cacher::setAndGet("phpunittest", 5, function () {
            return 'My Value';
        });

        $this->assertSame("My Value", $value);
    }

    /** @test */
    public function remember_returns_same_value()
    {
        $value = Cacher::remember("phpunittest", 5, function () {
            return 'My Value';
        });

        $this->assertSame("My Value", $value);
    }

    /** @test */
    public function forget_returns_exception()
    {
        $this->expectException(FrameworkNotDetected::class);
        $value = Cacher::forget('phpunittest');
    }

    /** @test */
    public function get_returns_exception()
    {
        $this->expectException(FrameworkNotDetected::class);
        $value = Cacher::get('phpunittest');
    }
}
