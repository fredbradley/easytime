<?php

namespace FredBradley\Cacher\Tests;

use FredBradley\EasyTime\EasyMinutes;
use FredBradley\EasyTime\EasySeconds;
use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }

    /** @test */
    public function an_hour_is_3600_seconds()
    {
        $this->assertEquals(3600, EasySeconds::AN_HOUR);
    }

    /** @test */
    public function two_hours_is_7200_seconds()
    {
        $this->assertEquals(7200, EasySeconds::hours(2));
    }

    /** @test */
    public function three_hours_is_seconds()
    {
        $this->assertEquals(10800, EasySeconds::minutes(EasyMinutes::hours(3)));
    }

    /** @test */
    public function seconds_in_a_year()
    {
        $this->assertEquals(31536000, EasySeconds::A_YEAR);
    }

    /** @test */
    public function mixed_test_from_readme()
    {
        $this->assertEquals(3600, EasySeconds::minutes(EasyMinutes::AN_HOUR));
    }

}
