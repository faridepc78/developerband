<?php

namespace App\Repositories;

use App\Models\User;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class UserRepository
{
    public function addAvatar($avatar_id, $id): int
    {
        return User::query()
            ->where('id', '=', $id)
            ->update([
                'avatar_id' => $avatar_id
            ]);
    }

    public function findById($id): Model|Collection|Builder|array|null
    {
        return User::query()
            ->findOrFail($id);
    }

    public function update($values, $avatar_id, $id): int
    {
        return User::query()
            ->where('id', '=', $id)
            ->update([
                'first_name' => $values['first_name'],
                'last_name' => $values['last_name'],
                'email' => $values['email'],
                'mobile' => $values['mobile'],
                'avatar_id' => $avatar_id
            ]);
    }

    public function updatePassword($password, $id): int
    {
        return User::query()
            ->where('id', '=', $id)
            ->update([
                'password' => bcrypt($password)
            ]);
    }

    public function getAllAdmins(): Collection|array
    {
        return User::query()
            ->where('role', '=', User::ADMIN)
            ->get();
    }
}
