<?php

use App\Modules\Hero\Database\Seeds\HeroTypesSeeder;
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
