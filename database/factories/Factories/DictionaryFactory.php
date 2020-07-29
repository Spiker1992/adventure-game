<?php

namespace Database\Factories\Factories;

use Faker\Generator as Faker;
use Illuminate\Support\Str;

class DictionaryFactory
{
    public static function handle(): array
    {
        $name = (new Faker)->name;

        return [
            'name' => $name,
            'key' => Str::kebab($name),
        ];
    }
}
