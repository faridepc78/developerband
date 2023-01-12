<?php

namespace App\Notifications\Contact;

use App\Channels\SmsChannel;
use App\Models\Contact;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Notification;

class SendContactSmsToAdminsNotification extends Notification implements ShouldQueue
{
    use Queueable;

    private Contact $contact;

    public function __construct(Contact $contact)
    {
        $this->contact = $contact;
    }

    public function via($notifiable): array
    {
        return [SmsChannel::class];
    }

    public function toSms($notifiable): string
    {
        return 'یک تماس جدید در وبسایت ثبت شد';
    }
}
