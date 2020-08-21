<?php

namespace App\Modules\Inventory\Models;

use App\Modules\Items\Interfaces\ItemInterface;
use Illuminate\Support\Arr;
use Illuminate\Support\MessageBag;

class Inventory
{
    protected $inventory;
    const MESSAGE_BAG_KEY = 'inventory';

    public function __construct(array $inventory = [])
    {
        $this->initInventory($inventory);
    }

    protected function initInventory(array $inventory): void 
    {
        $this->inventory = new MessageBag([self::MESSAGE_BAG_KEY => $inventory]); 
    }

    public function addItem(ItemInterface $item, int $position = null): void
    {
        $this->inventory->add(self::MESSAGE_BAG_KEY, $item);
    }

    public function removeItem(int $key): void
    {
        $items = $this->getItems();

        unset($items[$key]);

        $this->initInventory($items);
    }

    public function getItems(): array 
    {
        return Arr::get($this->inventory->getMessages(), static::MESSAGE_BAG_KEY);
    }
}
