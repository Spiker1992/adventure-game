<?php

namespace Tests\Feature;

use AdventureGame\Inventory\Domains\Inventory;
use AdventureGame\Item\Factories\ItemFactory;
use Tests\DatabaseTestCase;

class InventoryTest extends DatabaseTestCase
{
    protected $inventory;
    protected $item;

    public function setUp(): void
    {
        parent::setUp();

        $this->item = ItemFactory::make('Basic Sword');
        $this->inventory = new Inventory;
    }

    protected function addItem(int $count = 1): void
    {
        for ($i = 0; $i < $count; $i++) {
            $this->inventory->push($this->item);
        }
    }

    public function testAddItem()
    {
        $this->addItem(2);
        $this->assertCount(2, $this->inventory->toArray());
    }

    public function testRemoveItem()
    {
        $this->addItem(2);
        $this->inventory->forget(1);
        $this->assertCount(1, $this->inventory->toArray());
    }
}
