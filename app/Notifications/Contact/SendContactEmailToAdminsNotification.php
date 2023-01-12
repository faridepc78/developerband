<?php

namespace App\Notifications\Contact;

use App\Mail\Contact\SendContactToAdminsEmail;
use App\Models\Contact;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Notification;

class SendContactEmailToAdminsNotification extends Notification implements ShouldQueue
{
    use Queueable;

    private Contact $contact;

    public function __construct(Contact $contact)
    {
        $this->contact = $contact;
    }

    public function via($notifiable): array
    {
        return ['mail'];
    }

    public function toMail($notifiable): SendContactToAdminsEmail
    {
        return (new SendContactToAdminsEmail($this->contact, $notifiable))
            ->subject('اعلان تماس دولوپربند : ' . $this->contact->fullName)
            ->from(config('mail.from.address'), config('mail.from.name'))
            ->to($notifiable->email);
    }
}
