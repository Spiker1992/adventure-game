<?php

namespace Tests\Feature;

use App\Modules\Items\Factories\ItemFactory;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Artisan;
use Tests\TestCase;

class GenerateItemTest extends TestCase
{
    use RefreshDatabase;

    public function setUp(): void
    {
        parent::setUp();

        Artisan::call('db:seed');
    }

    public function testBasicTest()
    {
        $itemName = 'Basic Sword';
        $item = ItemFactory::make($itemName);

        $this->assertEquals($itemName, $item->getName());
    }
}
