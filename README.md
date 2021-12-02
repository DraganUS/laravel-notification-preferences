# Users can: Enable/disable notifications for email address, push notifications, SMS, slack..

[![Latest Version on Packagist](https://img.shields.io/packagist/v/draganus/laravel-notification-preferences.svg?style=flat-square)](https://packagist.org/packages/draganus/laravel-notification-preferences)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/draganus/laravel-notification-preferences/Check%20&%20fix%20styling?label=code%20style)](https://github.com/draganus/laravel-notification-preferences/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/draganus/laravel-notification-preferences.svg?style=flat-square)](https://packagist.org/packages/draganus/laravel-notification-preferences)

---

## Support me

[You can bye me a coffee  ☕️](https://www.buymeacoffee.com/draganUS).

## Installation

You can install the package via composer:

```bash
composer require draganus/laravel-notification-preferences
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --provider="draganus\LaravelNotificationPreferences\LaravelNotificationPreferencesServiceProvider"
php artisan migrate
```

This is the contents of the published config file:

```php
return [
    /*
     * Set the defoult notification's delivery channels
     */
    "notify_channels" => ['mail', 'database']
];
```

## Usage
in your Notification class replace via method 
```php
public function via($notifiable) 
{
    $notificationPreference = new NotificationPreference();
    return $notificationPreference->check($notifiable, self::class);
}
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

- [Dragan Usic](https://github.com/draganus)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
