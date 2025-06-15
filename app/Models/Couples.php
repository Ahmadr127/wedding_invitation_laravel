<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Couples extends Model
{
    protected $fillable = [
        'theme_id',
        'user_id',
        'groom_name',
        'bride_name',
        'groom_nickname',
        'bride_nickname',
        'groom_instagram',
        'bride_instagram',
        'wedding_date',
        'wedding_time',
        'venue_name',
        'venue_address',
        'google_maps_url',
        'google_maps_embed',
        'slug',
        'cover_image',
        'is_active'
    ];

    protected $casts = [
        'wedding_date' => 'date',
        'wedding_time' => 'datetime',
        'is_active' => 'boolean'
    ];

    public function theme(): BelongsTo
    {
        return $this->belongsTo(Themes::class, 'theme_id');
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function events(): HasMany
    {
        return $this->hasMany(Events::class, 'couple_id');
    }

    public function galleries(): HasMany
    {
        return $this->hasMany(Gallery::class, 'couple_id');
    }

    public function loveStories(): HasMany
    {
        return $this->hasMany(LoveStory::class, 'couple_id');
    }

    public function families(): HasMany
    {
        return $this->hasMany(Family::class, 'couple_id');
    }

    public function gifts(): HasMany
    {
        return $this->hasMany(Gifts::class, 'couple_id');
    }

    public function rsvps(): HasMany
    {
        return $this->hasMany(Rsvp::class, 'couple_id');
    }

    public function wishes(): HasMany
    {
        return $this->hasMany(Wishes::class, 'couple_id');
    }

    public function music(): HasMany
    {
        return $this->hasMany(Music::class, 'couple_id');
    }

    public function analytics(): HasMany
    {
        return $this->hasMany(Analytics::class, 'couple_id');
    }

    public function visitorLogs(): HasMany
    {
        return $this->hasMany(VisitorLogs::class, 'couple_id');
    }
}
