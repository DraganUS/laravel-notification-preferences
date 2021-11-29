<?php

namespace draganus\LaravelNotificationPreferences\Database\Factories;

use draganus\LaravelNotificationPreferences\Model\NotificationPreference;
use Illuminate\Database\Eloquent\Factories\Factory;


class NotificationPreferenceFactory extends Factory
{
    protected $model = NotificationPreference::class;

    public function definition()
    {
        return [
            'notification_preferences' => ["test"],
        ];
    }
}

