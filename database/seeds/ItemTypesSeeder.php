<?php

use App\Models\ItemTypes;
use Illuminate\Database\Seeder;

class ItemTypesSeeder extends Seeder
{
    public function run()
    {
        $types = config('items.types');

        ItemTypes::insert($types);
    }
}
