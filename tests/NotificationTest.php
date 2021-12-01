<?php

use draganus\LaravelNotificationPreferences\Model\NotificationPreference;

it('can create a model', function () {

    /* @var NotificationPreference $notifctionS */
    $notifctionS = NotificationPreference::factory()->create();

    $this->assertModelExists($notifctionS);
});
