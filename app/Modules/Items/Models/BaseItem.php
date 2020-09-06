<?php

namespace App\Modules\Items\Models;

use App\Models\Item;
use App\Modules\Items\Models\Interfaces\ItemInterface;
use Illuminate\Support\Arr;

abstract class BaseItem implements ItemInterface
{
    protected $name;
    protected $attributes = [];

    public function __construct(Item $item)
    {
        $this->name = $item->name;
    }

    public function setAttribute(string $key, int $value): void
    {
        Arr::set($this->attributes, $key, $value);
    }

    public function getName(): string
    {
        return $this->name;
    }
}
