<?php

namespace Tests\Feature;

use AdventureGame\Item\Factories\ItemFactory;
use AdventureGame\Item\Domains\ChestArmor;
use AdventureGame\Item\Domains\Sword;
use Tests\DatabaseTestCase;

class GenerateItemTest extends DatabaseTestCase
{
    public function dataProvider(): array
    {
        return [
            'basic sword' => ['Basic Sword', Sword::class],
            'leather mail' => ['Leather Mail', ChestArmor::class],
        ];
    }

    /**
     * @dataProvider dataProvider
     */
    public function testGenerateItem(string $itemName, string $className)
    {
        $item = ItemFactory::make($itemName);

        $this->assertEquals($itemName, $item->getName());
        $this->assertEquals($className, get_class($item));
    }
}
