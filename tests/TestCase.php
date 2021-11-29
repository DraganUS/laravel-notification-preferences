<?php

namespace draganus\LaravelNotificationPreferences\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Route;
use Orchestra\Testbench\TestCase as Orchestra;
use draganus\LaravelNotificationPreferences\LaravelNotificationPreferencesServiceProvider;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'draganus\\LaravelNotificationPreferences\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            LaravelNotificationPreferencesServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');


        $migration = include __DIR__ . '/../database/migrations/add-notification-preferences-to-users-table.php.stub';
        $migration->up();

    }
}
