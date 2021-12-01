<?php

namespace draganus\LaravelNotificationPreferences\Http\Controller;

use draganus\LaravelNotificationPreferences\Model\NotificationPreference;

class PreferenceController
{
    public function index(NotificationPreference $notificationPreference)
    {
        return 'ok';
    }
}
