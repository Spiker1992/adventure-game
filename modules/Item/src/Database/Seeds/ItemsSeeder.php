<?php

namespace AdventureGame\Item\Database\Seeds;

use AdventureGame\Item\Models\Item;
use AdventureGame\Item\Models\ItemAttribute;
use AdventureGame\Item\Models\ItemType;
use Illuminate\Database\Seeder;

class ItemsSeeder extends Seeder
{
    public function run()
    {
        collect(ITEMS)->each(function (array $items, string $itemType) {
            $this->seedItems($items, $itemType);
        });
    }

    protected function seedItems(array $items, string $itemType): void
    {
        $itemTypeModel = ItemType::where('key', $itemType)->firstOrFail();

        collect($items)->each(function (array $values, string $name) use ($itemTypeModel) {
            $this->seedItem($values, $name, $itemTypeModel);
        });
    }

    protected function seedItem(array $values, string $name, ItemType $itemType): void
    {
        $item = Item::create([
            'name' => $name,
            'item_type_id' => $itemType->id,
        ]);

        $this->seedAttributes($item, $values['attributes']);
    }

    protected function seedAttributes(Item $item, array $attributes): void
    {
        $attributeTypes = ItemAttribute::hasKeys(array_keys($attributes))->get();

        collect($attributes)->each(function ($boundries, $attributeKey) use ($item, $attributeTypes) {
            $values = array_values($boundries);
            $attribute = $attributeTypes->where('key', $attributeKey)->first();

            $item->attributes()
                ->attach($attribute->id, [
                    'min' => $values[0],
                    'max' => $values[1],
                ]);
        });
    }
}
