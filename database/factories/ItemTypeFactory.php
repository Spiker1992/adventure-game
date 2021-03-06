<?php

use AdventureGame\Item\Models\ItemType;
use Database\Factories\Factories\DictionaryFactory;

$factory->define(ItemType::class, function () {
    return DictionaryFactory::handle();
});
