<?php

use App\Modules\Items\Models\{
    ChestArmor,
    Sword,
};

define('ITEM_TYPE_SWORD', 'sword');
define('ITEM_TYPE_CHEST_ARMOR', 'chest-armor');

define('ITEM_TYPES', [
    ITEM_TYPE_SWORD => Sword::class,
    ITEM_TYPE_CHEST_ARMOR => ChestArmor::class
]);

define('ITEM_ATTRIBUTE_DAMAGE', 'damage');
define('ITEM_ATTRIBUTE_DEFENSE', 'defense');
define('ITEM_ATTRIBUTES', [
    ITEM_ATTRIBUTE_DAMAGE,
    ITEM_ATTRIBUTE_DEFENSE,
]);

define('ITEMS', [
    ITEM_TYPE_SWORD => [
        'Basic Sword' => [
            'attributes' => [
                ITEM_ATTRIBUTE_DAMAGE => [2, 4],
            ],
        ],
        'Normal Sword' => [
            'attributes' => [
                ITEM_ATTRIBUTE_DAMAGE => [7, 11],
            ],
        ],
    ],
    ITEM_TYPE_CHEST_ARMOR => [
        'Leather Mail' => [
            'attributes' => [
                ITEM_ATTRIBUTE_DEFENSE => [2, 4],
            ],
        ],
        'Chain Mail' => [
            'attributes' => [
                ITEM_ATTRIBUTE_DEFENSE => [7, 11],
            ],
        ],
    ],
]);
