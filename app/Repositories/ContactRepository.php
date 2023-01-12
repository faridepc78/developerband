<?php

namespace App\Repositories;

use App\Filters\Contact\Date;
use App\Filters\Contact\Status;
use App\Models\Contact;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pipeline\Pipeline;

class ContactRepository
{
    public function store($values): Model|Builder
    {
        return Contact::query()
            ->create([
                'first_name' => $values['first_name'],
                'last_name' => $values['last_name'],
                'email' => $values['email'],
                'mobile' => $values['mobile'],
                'subject' => $values['subject'],
                'message' => $values['message']
            ]);
    }

    public function paginate()
    {
        return app(Pipeline::class)
            ->send(Contact::query())
            ->through([
                Status::class,
                Date::class
            ])
            ->thenReturn()
            ->orderBy('status', 'asc')
            ->orderBy('id', 'desc')
            ->paginate(10);
    }

    public function findById($id): Model|Collection|Builder|array|null
    {
        return Contact::query()
            ->findOrFail($id);
    }

    public function updateStatus($id): int
    {
        return Contact::query()
            ->where('id', '=', $id)
            ->update([
                'status' => Contact::READ
            ]);
    }
}
