<?php

use App\Models\ItemType;
use Illuminate\Database\Seeder;

class ItemTypesSeeder extends Seeder
{
    public function run()
    {
        $items = collect(ITEM_TYPES)
            ->map(function ($item, $key) {
                return [
                    'key' => $key,
                    'name' => ucfirst($key),
                ];
            })
            ->toArray();

        ItemType::insert($items);
    }
}
