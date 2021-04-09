<?php

namespace FredBradley\EasyTime;

/**
 * Class EasyMinutes
 * @package FredBradley\Cacher
 */
class EasyMinutes
{
    public const AN_HOUR = 60;
    public const A_DAY = 24 * self::AN_HOUR;
    public const A_WEEK = 7 * self::A_DAY;
    public const A_MONTH = 30 * self::A_DAY;
    public const A_YEAR = 365 * self::A_DAY;

    public static function hours(int $int): int
    {
        return $int * self::AN_HOUR;
    }

    public static function days(int $int): int
    {
        return $int * self::A_DAY;
    }

    public static function weeks(int $int): int
    {
        return $int * self::A_WEEK;
    }

    public static function months(int $int): int
    {
        return $int * self::A_MONTH;
    }

    public static function years(int $int): int
    {
        return $int * self::A_YEAR;
    }

    public static function february(bool $leapYear = false)
    {
        if ($leapYear) {
            return self::A_DAY * 29;
        }
        return self::A_DAY * 28;
    }
}
