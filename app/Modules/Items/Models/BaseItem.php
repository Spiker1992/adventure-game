<?php

namespace App\Modules\Items\Models;

use App\Models\Item;
use Illuminate\Support\Arr;

abstract class BaseItem
{
    protected $name;
    protected $attributes = [];

    public function __construct(Item $item)
    {
        $this->name = $item->name;
    }

    public function setAttributes(array $attributes): void
    {
        $this->attributes = $attributes;
    }

    public function getAttribute(string $key): string
    {
        return Arr::get($this->attributes, $key);
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
