<?php

namespace FredBradley\EasyTime\Tests;

use FredBradley\EasyTime\EasyMinutes;
use PHPUnit\Framework\TestCase;

class MinutesTest extends TestCase
{
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }

    /** @test */
    public function staticsTests()
    {
        $this->assertEquals(60, EasyMinutes::AN_HOUR);
        $this->assertEquals(1440, EasyMinutes::A_DAY);
        $this->assertEquals(10080, EasyMinutes::A_WEEK);
        $this->assertEquals(43200, EasyMinutes::A_MONTH);
        $this->assertEquals(525600, EasyMinutes::A_YEAR);
    }

    /** @test */
    public function methodTests()
    {
        $this->assertEquals(120, EasyMinutes::hours(2));
        $this->assertEquals(2880, EasyMinutes::days(2));
        $this->assertEquals(20160, EasyMinutes::weeks(2));
        $this->assertEquals(86400, EasyMinutes::months(2));
        $this->assertEquals(1051200, EasyMinutes::years(2));
    }
}
