<?php

namespace FredBradley\EasyTime\Tests;

use FredBradley\EasyTime\EasyDays;
use PHPUnit\Framework\TestCase;

class DaysTest extends TestCase
{
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }

    /** @test */
    public function staticsTests()
    {
        $this->assertEquals(7, EasyDays::A_WEEK);
    }

    /** @test */
    public function february()
    {
        $this->assertEquals(28, EasyDays::month('february'));
        $this->assertEquals(29, EasyDays::month('february', true));
    }

    /** @test */
    public function methodTests()
    {
        $days = new EasyDays();

        $this->assertEquals(31, $days->january);
        $this->assertEquals(28, $days->february);
        $this->assertEquals(31, $days->march);
        $this->assertEquals(30, $days->april);
        $this->assertEquals(31, $days->may);
        $this->assertEquals(30, $days->june);
        $this->assertEquals(31, $days->july);
        $this->assertEquals(31, $days->august);
        $this->assertEquals(30, $days->september);
        $this->assertEquals(31, $days->october);
        $this->assertEquals(30, $days->november);
        $this->assertEquals(31, $days->december);

        $this->assertEquals(31, EasyDays::month('december'));
    }

    /** @test */
    public function getSomethingWrong()
    {
        $this->expectException(\Exception::class);
        $this->expectExceptionMessage("Month not recognised: [3ewd]");

        EasyDays::month('3ewd');
    }
}
