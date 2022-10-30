<?php

require "vendor/autoload.php";

use Stojko\UltimateNotifications\NotificationsService;

$notificationsService = new NotificationsService();

$notificationsService->send('db', ['to' => 2, 'from' => 1, 'subject' => 'Ovo je subject', 'message' => 'Ovo je test']);
//$notificationsService->send('sms', ['to' => '+381641234567', 'from' => '+38164123456', 'message' => 'Ovo je test poruka poslata sms-om']);
//$notificationsService->send('viber', ['to' => '+381641234567', 'from' => '+38164123456', 'message' => 'Ovo je test poruka poslata viberom']);
//$notificationsService->send('email', ['to' => 'aleksandar.stojilkovic@gmail.com', 'from' => 'aleksandar.stojilkovic@gmail.com', 'subject' => 'Ovo je subject', 'message' => 'Ovo je test']);



