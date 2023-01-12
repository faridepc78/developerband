<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Repositories\ContactRepository;
use Exception;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class ContactController extends Controller
{
    private ContactRepository $contactRepository;

    public function __construct(ContactRepository $contactRepository)
    {
        $this->contactRepository = $contactRepository;
    }

    public function index(): Factory|View|Application
    {
        $contacts = $this->contactRepository->paginate();
        return view('admin.contacts.index', compact('contacts'));
    }

    public function single($id)
    {
        $contact = $this->contactRepository->findById($id);

        try {
            if ($contact['status'] == Contact::UNREAD) {
                $this->contactRepository->updateStatus($contact['id']);
                $contact->refresh();
            }

            return view('admin.contacts.single', compact('contact'));
        } catch (Exception $exception) {
            newFeedback('پیام', 'عملیات با شکست مواجه شد', 'error');
        }
    }
}
