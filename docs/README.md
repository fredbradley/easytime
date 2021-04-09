# Easy Time

[![Latest Version on Packagist](https://img.shields.io/packagist/v/fredbradley/easytime.svg?style=flat-square)](https://packagist.org/packages/fredbradley/easytime)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md)
![StyleCI Status](https://github.styleci.io/repos/356180937/shield)
[![Total Downloads](https://img.shields.io/packagist/dt/fredbradley/easytime.svg?style=flat-square)](https://packagist.org/packages/fredbradley/easytime)

A small class based package to help with human-readable calculations of time.

For when you need to convert a human-readable number of minutes or seconds into an integer of seconds (for example expiry time on a Cache object)
## Installation

You can install the package via composer:

```bash
composer require fredbradley/easytime
```

## Usage Examples

``` php
use FredBradley\EasyTime\EasySeconds;

$seconds = EasySeconds::AN_HOUR; // returns 3600
$seconds = EasySeconds::hours(2); // return 7200

// What to know how many minutes in a year?
$minutes = EasyMinutes::A_YEAR;

// And if you want to you can mix them together...
$seconds = EasySeconds::minutes(EasyMinutes::AN_HOUR); // return 3600

// Number of Seconds in a given month?
$minutes = EasyMinutes::days(EasyDays::month('january'));

// Leap Years? Yep.. 
$minutes = EasyMinutes::days(EasyDays::month('february', true)); // where the second variable is a boolean for a leap year
```

Pull requests open for people who find this useful and what to build more.

### Testing

``` bash
composer test
```

### Security

If you discover any security related issues, please email code@fredbradley.co.uk instead of using the issue tracker.

## Credits

- [Fred Bradley](https://github.com/fredbradley)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE) for more information.

