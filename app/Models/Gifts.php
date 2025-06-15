<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Gifts extends Model
{
    protected $fillable = [
        'couple_id',
        'title',
        'description',
        'image_url',
        'bank_name',
        'account_number',
        'account_holder',
        'qris_image',
        'is_active'
    ];

    protected $casts = [
        'is_active' => 'boolean'
    ];

    public function couple(): BelongsTo
    {
        return $this->belongsTo(Couples::class, 'couple_id');
    }
}
