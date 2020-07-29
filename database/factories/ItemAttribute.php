<?php

use App\Models\ItemAttribute;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(ItemAttribute::class, function (Faker $faker) {
    $name = $faker->name;

    return [
        'name' => $name,
        'key' => Str::kebab($name),
    ];
});
