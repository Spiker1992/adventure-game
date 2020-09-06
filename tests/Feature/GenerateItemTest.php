<?php

namespace Tests\Feature;

use App\Modules\Items\Factories\ItemFactory;
use App\Modules\Items\Models\ChestArmor;
use App\Modules\Items\Models\Sword;
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
