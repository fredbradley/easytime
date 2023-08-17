<?php

namespace FredBradley\EasyTime;

use Exception;

class EasyDays
{
    public const A_WEEK = 7;

    /**
     * @var array<string,int>
     */
    public array $monthLengths = [
        'january'   => 31,
        'february'  => 28,
        'march'     => 31,
        'april'     => 30,
        'may'       => 31,
        'june'      => 30,
        'july'      => 31,
        'august'    => 31,
        'september' => 30,
        'october'   => 31,
        'november'  => 30,
        'december'  => 31,
    ];

    /**
     * @throws Exception
     */
    public static function month(string $month, bool $leapYear = false): int
    {
        $month = strtolower($month); // lets make sure we always do lower case

        $instance = new self();
        if (!in_array($month, array_keys($instance->monthLengths))) {
            throw new Exception('Month not recognised: ['.$month.']', 400);
        }
        if ($month === 'february') {
            return $instance->february($leapYear);
        }

        return $instance->$month;
    }

    private function february(bool $leapYear = false): int
    {
        if ($leapYear) {
            return 29;
        }

        return 28;
    }

    /**
     * @throws Exception
     */
    public function __get(string $name): int
    {
        if (isset($this->monthLengths[$name])) {
            return $this->monthLengths[$name];
        }

        throw new Exception('Property not found: ['.$name.']', 400);
    }
}
