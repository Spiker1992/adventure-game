<?php

use App\Models\Item;
use Faker\Generator as Faker;

$factory->define(Item::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'item_type_id' => function () {
            return factory(ItemType::class)->create()->id;
        },
    ];
});
