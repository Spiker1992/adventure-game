<?php

namespace AdventureGame\Item\Domains;

use AdventureGame\Item\Models\Item;
use AdventureGame\Item\Domains\Interfaces\ItemInterface;
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
