<p class="filament-hidden">
<img src="https://banners.beyondco.de/filament-matomo.png?theme=light&packageManager=composer+require&packageName=marcogermani87%2Ffilament-matomo&pattern=architect&style=style_1&description=Easy+Matomo+tracker+integration+for+Filament&md=1&showWatermark=0&fontSize=100px&images=https%3A%2F%2Flaravel.com%2Fimg%2Flogomark.min.svg" class="filament-hidden">
</p>

[![Latest Version on Packagist](https://img.shields.io/packagist/v/marcogermani87/filament-matomo.svg?style=flat-square)](https://packagist.org/packages/marcogermani87/filament-matomo)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/marcogermani87/filament-matomo/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/marcogermani87/filament-matomo/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/marcogermani87/filament-matomo/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/marcogermani87/filament-matomo/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/marcogermani87/filament-matomo.svg?style=flat-square)](https://packagist.org/packages/marcogermani87/filament-matomo)

A package to easily include Matomo tracker in [Filament](https://filamentphp.com).

## Version Compatibility

| Plugin  | Filament | Laravel | PHP |
| ------------- | ------------- | ------------- | -------------|
| 1.x  | 3.x  | 10.x | 8.x |
| 1.x  | 3.x  | 11.x \| 12.x | 8.2 \| 8.3 \| 8.4 |
## Installation

You can install the package via composer:

```bash
composer require marcogermani87/filament-matomo
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="filament-matomo-config"
```

This is the contents of the published config file:

```php
return [

    'enabled' => env('FILAMENT_MATOMO_ENABLED', false),

    'base_url' => env('FILAMENT_MATOMO_BASE_URL'),

    'tracker_filename' => env('FILAMENT_MATOMO_TRACKER_FILENAME', 'matomo.php'),

    'site_id' => env('FILAMENT_MATOMO_SITE_ID'),

];
```

## Usage

```php
->plugin(\MarcoGermani87\FilamentMatomo\FilamentMatomo::make())
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Credits

- [Marco Germani](https://github.com/marcogermani87)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
