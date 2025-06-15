<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Wishes extends Model
{
    protected $fillable = [
        'couple_id',
        'guest_name',
        'message',
        'is_approved'
    ];

    protected $casts = [
        'is_approved' => 'boolean'
    ];

    public function couple(): BelongsTo
    {
        return $this->belongsTo(Couples::class, 'couple_id');
    }
}
