<?php

namespace AdventureGame\Item\Database\Seeds;

use AdventureGame\Item\Models\ItemType;
use Illuminate\Database\Seeder;

class ItemTypesSeeder extends Seeder
{
    public function run()
    {
        $timestamps = [
            'created_at' => now(),
            'updated_at' => now(),
        ];

        $items = collect(ITEM_TYPES)
            ->map(function ($item, $key) use ($timestamps) {
                return [
                    'key' => $key,
                    'name' => ucfirst($key),
                ] + $timestamps;
            })
            ->toArray();

        ItemType::insert($items);
    }
}
