<?php

it('has a route',function (){

   $this
       ->get(action([\draganus\LaravelNotificationPreferences\Http\Controller\PreferenceController::class, 'index']))
       ->assertOk();
});
