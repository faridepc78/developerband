<?php

namespace App\Channels;

use Illuminate\Notifications\Notification;
use Rezahmady\Smsir\Facades\Smsir;

class SmsChannel
{
    public function send($notifiable, Notification $notification)
    {
        SMSIR::send([$notification->toSms($notifiable)], [$notifiable->mobile]);
    }
}
