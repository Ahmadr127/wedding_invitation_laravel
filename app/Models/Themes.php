<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Themes extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'description',
        'preview_image',
        'thumbnail_image',
        'price',
        'category',
        'features',
        'color_scheme',
        'font_family',
        'is_active'
    ];

    protected $casts = [
        'features' => 'array',
        'color_scheme' => 'array',
        'font_family' => 'array',
        'is_active' => 'boolean',
        'price' => 'decimal:2'
    ];

    public function couples(): HasMany
    {
        return $this->hasMany(Couples::class, 'theme_id');
    }
}
