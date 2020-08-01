<?php

namespace App\Modules\Items\Factories;

use App\Models\Item;
use App\Modules\Items\Models\BaseItem;

class ItemFactory
{
    public static function make(string $name): BaseItem
    {
        $model = Item::where('name', $name)->firstOrFail();
        $itemClass = ITEM_TYPES[$model->type->key];
        $item = new $itemClass($model);

        static::makeAttributes($item, $model->attributes);

        return $item;
    }

    protected static function makeAttributes(BaseItem &$item, $attributes): void
    {
        foreach ($attributes as $attribute) {
            $value = rand($attribute->pivot->min, $attribute->pivot->max);

            $item->setAttribute($attribute->key, $value);
        }
    }
}
