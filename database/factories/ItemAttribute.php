<?php

use AdventureGame\Item\Models\ItemAttribute;
use Database\Factories\Factories\DictionaryFactory;

$factory->define(ItemAttribute::class, function () {
    return DictionaryFactory::handle();
});
