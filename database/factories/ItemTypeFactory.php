<?php

use App\Models\ItemType;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(ItemType::class, function (Faker $faker) {
    $name = $faker->name;

    return [
        'name' => $name,
        'key' => Str::kebab($name),
    ];
});
