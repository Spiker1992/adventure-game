<?php

use App\Models\ItemAttribute;
use Database\Factories\Factories\DictionaryFactory;

$factory->define(ItemAttribute::class, function () {
    return DictionaryFactory::handle();
});
