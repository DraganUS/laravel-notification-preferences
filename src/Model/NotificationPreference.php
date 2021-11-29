<?php

namespace draganus\LaravelNotificationPreferences\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class NotificationPreference extends Model
{
    use HasFactory;
    public $guarded = [];
    public $timestamps = false;
    protected $casts = [
        'notification_preferences' => 'array'
    ];

    public function check($data)
    {
        $preferences = json_decode($data->notification_preferences);

        if (!isset($preferences) && empty($preferences)){
            return config('notification-preferences.notify_channels');
        } else{
            return $preferences;
        }
    }
}
