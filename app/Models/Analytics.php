<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Analytics extends Model
{
    protected $fillable = [
        'couple_id',
        'page_views',
        'unique_visitors',
        'rsvp_count',
        'wishes_count',
        'last_updated'
    ];

    protected $casts = [
        'last_updated' => 'datetime'
    ];

    public function couple(): BelongsTo
    {
        return $this->belongsTo(Couples::class, 'couple_id');
    }
}
