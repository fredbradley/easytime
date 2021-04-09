<?php

namespace FredBradley\EasyTime\Tests;

use FredBradley\EasyTime\EasySeconds;
use PHPUnit\Framework\TestCase;

class SecondsTest extends TestCase
{
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }

    /** @test */
    public function staticsTests()
    {
        $this->assertEquals(60, EasySeconds::A_MINUTE);
        $this->assertEquals(3600, EasySeconds::AN_HOUR);
        $this->assertEquals(86400, EasySeconds::A_DAY);
        $this->assertEquals(604800, EasySeconds::A_WEEK);
        $this->assertEquals(2592000, EasySeconds::A_MONTH);
        $this->assertEquals(31536000, EasySeconds::A_YEAR);
    }

    /** @test */
    public function methodTests()
    {
        $this->assertEquals(120, EasySeconds::minutes(2));
        $this->assertEquals(7200, EasySeconds::hours(2));
        $this->assertEquals(172800, EasySeconds::days(2));
        $this->assertEquals(1209600, EasySeconds::weeks(2));
        $this->assertEquals(5184000, EasySeconds::months(2));
        $this->assertEquals(63072000, EasySeconds::years(2));
    }
}
