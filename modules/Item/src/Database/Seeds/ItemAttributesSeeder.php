<?php

namespace AdventureGame\Item\Database\Seeds;

use AdventureGame\Item\Models\ItemAttribute;
use Illuminate\Database\Seeder;

class ItemAttributesSeeder extends Seeder
{
    public function run(): void
    {
        $timestamps = [
            'created_at' => now(),
            'updated_at' => now(),
        ];

        $items = collect(ITEM_ATTRIBUTES)
            ->map(function ($item) use ($timestamps) {
                return [
                    'key' => $item,
                    'name' => ucfirst($item),
                ] + $timestamps;
            })
            ->toArray();

        ItemAttribute::insert($items);
    }
}
