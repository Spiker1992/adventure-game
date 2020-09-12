<?php

namespace App\Modules\Hero\Database\Seeds;

use App\Modules\Hero\Models\HeroType;
use Illuminate\Database\Seeder;

class HeroTypesSeeder extends Seeder
{
    public function run()
    {
        $timestamps = [
            'created_at' => now(),
            'updated_at' => now(),
        ];

        $items = collect(HERO_TYPES)
            ->map(function ($item) use ($timestamps) {
                return [
                    'key' => $item,
                    'name' => ucfirst($item),
                ] + $timestamps;
            })
            ->toArray();

        HeroType::insert($items);
    }
}
