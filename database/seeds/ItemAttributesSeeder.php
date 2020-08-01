<?php

use App\Models\ItemAttribute;
use Illuminate\Database\Seeder;

class ItemAttributesSeeder extends Seeder
{
    public function run(): void
    {
        $items = collect(ITEM_ATTRIBUTES)
            ->map(function ($item) {
                return [
                    'key' => $item,
                    'name' => ucfirst($item),
                ];
            })
            ->toArray();

        ItemAttribute::insert($items);
    }
}
