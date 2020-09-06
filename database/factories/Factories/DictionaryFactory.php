<?php

namespace Database\Factories\Factories;

use Faker\Factory as Faker;
use Illuminate\Support\Str;

class DictionaryFactory
{
    public static function handle(): array
    {
        $faker = Faker::create();
        $name = $faker->unique;

        return [
            'name' => $name,
            'key' => Str::kebab($name),
        ];
    }
}
