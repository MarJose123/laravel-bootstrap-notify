# This will ease to show notification to a user on form submission

[![Latest Version on Packagist](https://img.shields.io/packagist/v/marjose/laravel-bootstrap-notify.svg?style=flat-square)](https://packagist.org/packages/marjose/laravel-bootstrap-notify)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/whoami213/laravel-bootstrap-notify/run-tests?label=tests)](https://github.com/whoami213/laravel-bootstrap-notify/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/whoami213/laravel-bootstrap-notify/Check%20&%20fix%20styling?label=code%20style)](https://github.com/whoami213/laravel-bootstrap-notify/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/marjose/laravel-bootstrap-notify.svg?style=flat-square)](https://packagist.org/packages/marjose/laravel-bootstrap-notify)


This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require marjose/laravel-bootstrap-notify
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --provider="Marjose\notify\notifyServiceProvider" --tag="laravel-bootstrap-notify-migrations"
php artisan migrate
```

You can publish the config file with:
```bash
php artisan vendor:publish --provider="Marjose\notify\notifyServiceProvider" --tag="laravel-bootstrap-notify-config"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

```php
$laravel-bootstrap-notify = new Marjose\notify();
echo $laravel-bootstrap-notify->echoPhrase('Hello, Marjose!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Marjose](https://github.com/whoami213)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
