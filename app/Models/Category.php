<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

    protected $guarded =
        [
            'id',
            'created_at',
            'updated_at'
        ];

    protected $fillable =
        [
            'name',
            'slug',
            'type'
        ];

    const Project = 'project';
    const Post = 'post';
    static array $types =
        [
            self::Project,
            self::Post
        ];
}
