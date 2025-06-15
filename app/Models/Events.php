<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Events extends Model
{
    protected $fillable = [
        'couple_id',
        'title',
        'description',
        'event_date',
        'event_time',
        'location',
        'google_maps_url',
        'google_maps_embed',
        'dress_code',
        'is_active'
    ];

    protected $casts = [
        'event_date' => 'date',
        'event_time' => 'datetime',
        'is_active' => 'boolean'
    ];

    public function couple(): BelongsTo
    {
        return $this->belongsTo(Couples::class, 'couple_id');
    }

    public function rsvps(): HasMany
    {
        return $this->hasMany(Rsvp::class, 'event_id');
    }
}
