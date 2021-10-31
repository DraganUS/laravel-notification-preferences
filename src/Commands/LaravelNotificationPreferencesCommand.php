<?php

namespace draganus\LaravelNotificationPreferences\Commands;

use Illuminate\Console\Command;

class LaravelNotificationPreferencesCommand extends Command
{
    public $signature = 'laravel-notification-preferences';

    public $description = 'My command';

    public function handle()
    {
        $this->comment('All done');
    }
}
