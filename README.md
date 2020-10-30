# :
[![License](https://img.shields.io/github/license/:tallandsassy/:app-theme-base)](https://github.com/:tallandsassy/:app-theme-base/blob/master/LICENSE.md)
[![Latest Version on Packagist](https://img.shields.io/packagist/v/:tallandsassy/:app-theme-base.svg?style=flat-square)](https://packagist.org/packages/:tallandsassy/:app-theme-base)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/:tallandsassy/:app-theme-base/run-tests?label=tests)](https://github.com/:tallandsassy/:app-theme-base/actions?query=workflow%3Arun-tests+branch%3Amaster)
[![Coverage Status](https://coveralls.io/repos/github/:tallandsassy/:app-theme-base/badge.svg?branch=master)](https://coveralls.io/github/:tallandsassy/:app-theme-base?branch=master)

[![Total Downloads](https://img.shields.io/packagist/dt/:tallandsassy/:app-theme-base.svg?style=flat-square)](https://packagist.org/packages/:tallandsassy/:app-theme-base)


put images in public/img/logos
    applogo.png
    applogolog.png
## Support us

Please send love

## Installation

You can install the package via composer:

[ ] Make a local table for testing called 'tmp_laravel_package' (per 'phpunit.xml')

```bash
composer require tallandsassy/app-theme-base
```

You can publish the sample images with:
```bash
php artisan vendor:publish --provider="TallAndSassy\AppThemeBase\AppThemeBaseServiceProvider" --tag="public"
```


You can publish and run the migrations with:

```bash
php artisan vendor:publish --provider="TallAndSassy\AppThemeBase\AppThemeBaseServiceProvider" --tag="migrations"
php artisan migrate
```

You can publish the config file with:
```bash
php artisan vendor:publish --provider="TallAndSassy\AppThemeBase\AppThemeBaseServiceProvider" --tag="config"
```

You can grok the routes (when .env(local)) by visiting 
    
http://test-tallandsassy.test/grok/TallAndSassy/AppThemeBase/string
http://test-tallandsassy.test/grok/TallAndSassy/AppThemeBase/controller

This is the contents of the published config file:

```php
return [
];
```

## Usage

``` php
$app-theme-base = new TallAndSassy\AppThemeBase();
echo $app-theme-base->echoPhrase('Hello, TallAndSassy!');
```

## Testing

``` bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [:jjrohrer](https://github.com/:jjrohrer)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
