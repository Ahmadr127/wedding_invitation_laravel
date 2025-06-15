<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Rsvp extends Model
{
    protected $fillable = [
        'couple_id',
        'event_id',
        'guest_name',
        'email',
        'phone',
        'attendance_status',
        'number_of_guests',
        'message',
        'is_verified'
    ];

    protected $casts = [
        'is_verified' => 'boolean'
    ];

    public function couple(): BelongsTo
    {
        return $this->belongsTo(Couples::class, 'couple_id');
    }

    public function event(): BelongsTo
    {
        return $this->belongsTo(Events::class, 'event_id');
    }
}
