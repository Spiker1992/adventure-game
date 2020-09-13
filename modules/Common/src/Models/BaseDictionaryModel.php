<?php

namespace AdventureGame\Common\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class BaseDictionaryModel extends Model
{
    protected $fillable = [
        'key',
        'name',
    ];

    public function scopeHasKeys(Builder $builder, array $keys): void
    {
        $builder->whereIn('key', $keys);
    }
}
