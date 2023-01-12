<?php

namespace App\Mail\Contact;

use App\Models\Contact;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendContactToAdminsEmail extends Mailable
{
    use Queueable, SerializesModels;

    private Contact $contact;
    private User $admin;

    public function __construct(Contact $contact, User $admin)
    {
        $this->contact = $contact;
        $this->admin = $admin;
    }

    public function build(): SendContactToAdminsEmail
    {
        return $this->view('mails.contact.index')
            ->with([
                'contact' => $this->contact,
                'admin' => $this->admin
            ]);
    }
}
