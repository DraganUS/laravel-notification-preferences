<?php

use draganus\LaravelNotificationPreferences\Tests\TestCase;
use Illuminate\Support\Facades\Route;

uses(TestCase::class)
    ->beforeEach(function () {
        Route::notificationPreference();
    })
    ->in(__DIR__);
