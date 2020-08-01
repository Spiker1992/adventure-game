<?php

use App\Modules\Items\Models\Sword;

define('ITEM_TYPE_SWORD', 'sword');

define('ITEM_TYPES', [
    ITEM_TYPE_SWORD => Sword::class,
]);

define('ITEM_ATTRIBUTE_DAMAGE', 'damage');
define('ITEM_ATTRIBUTE_DURABILITY', 'durability');
define('ITEM_ATTRIBUTES', [
    ITEM_ATTRIBUTE_DAMAGE,
    ITEM_ATTRIBUTE_DURABILITY,
]);

define('ITEMS', [
    ITEM_TYPE_SWORD => [
        'Basic Sword' => [
            'attributes' => [
                ITEM_ATTRIBUTE_DAMAGE => [2, 4],
                ITEM_ATTRIBUTE_DURABILITY => [1, 10],
            ],
        ],
        'Normal Sword' => [
            'attributes' => [
                ITEM_ATTRIBUTE_DAMAGE => [7, 11],
                ITEM_ATTRIBUTE_DURABILITY => [1, 10],
            ],
        ],
    ],
]);
