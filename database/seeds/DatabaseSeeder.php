<?php

use AdventureGame\Hero\Database\Seeds\HeroTypesSeeder;
use AdventureGame\Item\Database\Seeds\{
    ItemAttributesSeeder,
    ItemsSeeder,
    ItemTypesSeeder,
};
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            ItemTypesSeeder::class,
            ItemAttributesSeeder::class,
            ItemsSeeder::class,
            HeroTypesSeeder::class,
        ]);
    }
}
