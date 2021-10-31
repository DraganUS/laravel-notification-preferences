<?php

namespace draganus\LaravelNotificationPreferences;

use Illuminate\Support\Facades\Facade;

/**
 * @see \draganus\LaravelNotificationPreferences\LaravelNotificationPreferences
 */
class LaravelNotificationPreferencesFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-notification-preferences';
    }
}
