<?php

namespace App\Modules\Hero\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Hero extends Model
{
    protected $fillable = [
        'name',
        'hero_type_id',
    ];

    public function type(): BelongsTo
    {
        return $this->belongsTo(HeroType::class, 'hero_type_id');
    }
}
