# Easy Time

[![Latest Version on Packagist](https://img.shields.io/packagist/v/fredbradley/easytime.svg?style=flat-square)](https://packagist.org/packages/fredbradley/easytime)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md)
![StyleCI Status](https://github.styleci.io/repos/278584366/shield)
[![Total Downloads](https://img.shields.io/packagist/dt/fredbradley/easytime.svg?style=flat-square)](https://packagist.org/packages/fredbradley/easytime)

A small class based package to help with human-readable calculations of time.

## Installation

You can install the package via composer:

```bash
composer require fredbradley/easytime
```

## Usage

``` php
use FredBradley\easytime;

Easytime::remember('cache_key_name', 300, function() {
    // Your logic
    $value = "value";
    return $value;
});

/*
 * Will set the value of 'cache_key_name' to the return value of the Closure callback and 
 * save in the cache for 5 minutes (300 seconds)
 */
```

There's only a small handful of methods in the one class. It's really basic, but amazingly wonderful!

### Testing

``` bash
composer test
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email code@fredbradley.co.uk instead of using the issue tracker.

## Credits

- [Fred Bradley](https://github.com/fredbradley)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

