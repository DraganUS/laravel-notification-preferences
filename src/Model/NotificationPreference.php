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
        'notification_preferences' => 'array',
    ];

    public function check($user, $notificationType = null)
    {
        $data = NotificationPreference::where('user_id', $user->id)->where('type', $notificationType)->first();
        if ($data) {
            $preferences = $data->notification_preferences;
            if (! isset($preferences) && empty($preferences)) {
                return config('notification-preferences.notify_channels');
            } else {
                return $preferences;
            }
        } else {
            return config('notification-preferences.notify_channels');
        }
    }

    public function allNotificationSettings($user = null)
    {
        $arr = [];
        foreach (config('notification-preferences.notify_type') as $notifyType) {
            $arr[$notifyType] = config('notification-preferences.notify_channels');
        }

        return $arr;
        if (! empty($user)) {
            $data = NotificationPreference::where('user_id', $user->id)->whereIn('type',  config('notification-preferences.notify_type'))->pluck('notification_preferences', 'type')->all();

            return $data;
        }
    }
}
