<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Project extends Model
{
    protected $table = 'projects';

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
            'image_id',
            'category_id',
            'customer',
            'delivery_date',
            'link',
            'text',
            'priority'
        ];

    public function image(): BelongsTo
    {
        return $this->belongsTo(Media::class, 'image_id')->withDefault();
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'category_id')->withDefault();
    }

    public function gallery(): HasMany
    {
        return $this->hasMany(ProjectGallery::class, 'project_id');
    }

    public function path(): string
    {
        return route('project', $this->id . '-' . $this->slug);
    }
}
