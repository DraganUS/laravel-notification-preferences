<?php

namespace draganus\LaravelNotificationPreferences;

use Illuminate\Support\Facades\Route;
use draganus\LaravelNotificationPreferences\Http\Controller\PreferenceController;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use draganus\LaravelNotificationPreferences\Commands\LaravelNotificationPreferencesCommand;

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
            ->hasMigration('add-notification-preferences-to-users-table');
    }

    public function registeringPackage()
    {
        Route::macro('notificationPreference', function (string $baseUrl = 'notification/preference'){
            Route::prefix($baseUrl)->group(function (){
                Route::get('/', [PreferenceController::class, 'index']);
                Route::post('/', [PreferenceController::class, 'index']);
            });
        });
    }
}
