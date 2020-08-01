<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Item extends Model
{
    protected $fillable = [
        'name',
        'item_type_id',
    ];

    public function attributes(): BelongsToMany
    {
        return $this->belongsToMany(ItemAttribute::class, DATABASE_ITEM_ITEM_ATTRIBUTES)
            ->withPivot([
                'min',
                'max',
            ]);
    }

    public function type(): BelongsTo
    {
        return $this->belongsTo(ItemType::class, 'item_type_id');
    }
}
