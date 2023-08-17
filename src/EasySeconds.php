<?php

namespace FredBradley\EasyTime;

class EasySeconds
{
    public const A_MINUTE = 60;

    public const AN_HOUR = 60 * self::A_MINUTE;

    public const A_DAY = 24 * self::AN_HOUR;

    public const A_WEEK = 7 * self::A_DAY;

    public const A_MONTH = 30 * self::A_DAY; // Alright, not always true, but good enough

    public const A_YEAR = 365 * self::A_DAY; // Again, every 4 years not strictly true

    public static function minutes(int $int): int
    {
        return $int * self::A_MINUTE;
    }

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
}
