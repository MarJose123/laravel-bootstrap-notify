# This will ease to show notification to a user on form submission

[![Latest Version on Packagist](https://img.shields.io/packagist/v/marjose/laravel-bootstrap-notify.svg?style=flat-square)](https://packagist.org/packages/marjose/laravel-bootstrap-notify)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/whoami213/laravel-bootstrap-notify/run-tests?label=tests)](https://github.com/whoami213/laravel-bootstrap-notify/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/whoami213/laravel-bootstrap-notify/Check%20&%20fix%20styling?label=code%20style)](https://github.com/whoami213/laravel-bootstrap-notify/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/marjose/laravel-bootstrap-notify.svg?style=flat-square)](https://packagist.org/packages/marjose/laravel-bootstrap-notify)


## Installation

You can install the package via composer:

```bash
composer require marjose/laravel-bootstrap-notify
```

You can publish the assets with:

```bash
php artisan vendor:publish --provider="Marjose\notify\notifyServiceProvider" --tag="notify-assets"
```

You can publish the views with:

```bash
php artisan vendor:publish --provider="Marjose\notify\notifyServiceProvider" --tag="notify-views"
```


You can publish the config file with:
```bash
php artisan vendor:publish --provider="Marjose\notify\notifyServiceProvider" --tag="notify-config"
```

This is the contents of the published config file:

```php
return [
    /*
    |--------------------------------------------------------------------------
    | Notification timeout
    |--------------------------------------------------------------------------
    |
    | Defines the number of seconds during which the notification will be visible.
    |
    */

    'timeout'   => 5000,
    
    /*
    |--------------------------------------------------------------------------
    | Preset Messages
    |--------------------------------------------------------------------------
    |
    | Define any preset messages here that can be reused.
    | model: alert or toast
    */

    'preset-messages' => [
        'user-updated' => [
            'message' => 'The user has been updated successfully.',
            'type'    => 'success',
            'icon'    => 'fas fa-thumbs-up fa-3x',
            'model'   => 'alert',
            'title'   => 'User Updated',
        ],
    ],
];

```
Now that we have published a few new files to our application we need to reload them with the following command:
```bash
composer dump-autoload
```


## Prerequisites

1. Add styles links with
```html
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/all.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/regular.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/solid.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/brands.min.css">
```
2. Add js link with
```html
<script src="LINK_TO_YOUR_JQUERY_TEMPLATE.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/js/fontawesome.min.js"></script>
@notifyJs
```
3. Include notify partial to your master layout
```html
@include('notify::components.notify')
```
If you are on Laravel 7 or greater, you can use the tag syntax.
```html
<x:notify-messages/>
```
4. 


# Usage
Within your controllers, before you perform a redirect call the notify method with a message. By default `Laravel Bootstrap Notify` used `Fontawesome` for the icons.
```php
public function store()
{
    notify()->success('Laravel Notify is awesome!');

    return Redirect::home();
}
```
A complete example:
```html
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/all.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/regular.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/solid.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/brands.min.css">
        <!-- Fonts -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">



        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </head>
    <body>
            <x:notify-messages/>
            <script src="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/js/fontawesome.min.js"></script>
            @notifyJs
    </body>
</html>
```

# Types of alerts
```php
notify()->success($message);
notify()->error($message);
notify()->info($message);
notify()->warning($message);
```

You can also use a custom or pre-defined alert by adding it to the config under the preset.
```php
'user-updated' => [
            'message' => 'The user has been updated successfully.',
            'type'    => 'success',
            'icon'    => 'fas fa-thumbs-up fa-3x',
            'model'   => 'alert',
            'title'   => 'User Updated',
        ],
```

how to use the preset, you need to use ```notify``` facades

```php
use Marjose\notify\notify;
notify::preset('user-updated');
```

# Advance

You can use different Icon css framework like `Fontawesome`, `Bootstrap Icon`, and many others if you use the `preset` functionality.

If you want to modify the styling of the alert you are `free` to make any change of the component in the `views/vendor/notify/notification`



# Other

if you are looking for the same but for `TailwindCss` you can visit this guy.

- [mckenziearts](https://github.com/mckenziearts/laravel-notify)

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
