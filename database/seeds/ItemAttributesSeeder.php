<?php

use App\Models\ItemAttribute;
use Illuminate\Database\Seeder;

class ItemAttributesSeeder extends Seeder
{
    public function run()
    {
        $attributes = config('items.attributes');

        ItemAttribute::insert($attributes);
    }
}
