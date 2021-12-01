<?php

namespace draganus\LaravelNotificationPreferences;

use draganus\LaravelNotificationPreferences\Http\Controller\PreferenceController;
use Illuminate\Support\Facades\Route;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaravelNotificationPreferencesServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-notification-preferences')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_notification_preferences_table');
    }

    public function registeringPackage()
    {
        Route::macro('notificationPreference', function (string $baseUrl = 'notification/preference') {
            Route::prefix($baseUrl)->group(function () {
                Route::get('/', [PreferenceController::class, 'index']);
                Route::post('/', [PreferenceController::class, 'index']);
            });
        });
    }
}
