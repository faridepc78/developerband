<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = 'contacts';

    protected $guarded =
        [
            'id',
            'created_at',
            'updated_at'
        ];

    protected $fillable =
        [
            'first_name',
            'last_name',
            'email',
            'mobile',
            'subject',
            'message',
            'status'
        ];

    const UNREAD = 'unread';
    const READ = 'read';
    static array $statuses =
        [
            self::UNREAD,
            self::READ
        ];

    public function getFullNameAttribute(): string
    {
        return $this->first_name . ' ' . $this->last_name;
    }

    public function status()
    {
        if ($this->status == Contact::READ) {
            return '<td class="alert alert-success">' . trans('translation.' . $this->status) . '</td>';
        } elseif ($this->status == Contact::UNREAD) {
            return '<td class="alert alert-danger">' . trans('translation.' . $this->status) . '</td>';
        }
    }
}
