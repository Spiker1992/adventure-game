<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ItemAttribute extends Model
{
    protected $fillable = [
        'key',
        'name',
    ];
}
