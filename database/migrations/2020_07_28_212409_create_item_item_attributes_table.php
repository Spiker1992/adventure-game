<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemItemAttributesTable extends Migration
{
    protected $table = 'item_item_attributes';

    public function up()
    {
        Schema::create($this->table, function (Blueprint $table) {
            $table->foreignId('item_id')
                ->constrained('items')
                ->onDelete('cascade');

            $table->foreignId('item_attribute_id')
                ->constrained('item_attributes')
                ->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists($this->table);
    }
}
