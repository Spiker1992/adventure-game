<?php

namespace App\Modules\Items\Factories;

use App\Models\Item;
use App\Modules\Items\Models\BaseItem;

class ItemFactory
{
    public static function make(string $name): BaseItem
    {
        $model = Item::where('name', $name)->firstOrFail();
        $attributes = $model->attributes;
        $itemType = $model->type;
        $itemClass = ITEM_TYPES[$itemType->key];
        $item = new $itemClass($model);

        foreach ($attributes as $attribute) {
            $value = rand($attribute->pivot->min, $attribute->pivot->max);

            $item->setAttribute($attribute->key, $value);
        }

        return $item;
    }
}
