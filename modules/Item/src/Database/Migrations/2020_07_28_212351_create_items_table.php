<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    protected $table = DB_TABLE_ITEMS;

    public function up()
    {
        Schema::create($this->table, function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedSmallInteger('item_type_id');
            $table->timestamps();

            $table->foreign('item_type_id')
                ->references('id')
                ->on(DB_TABLE_ITEM_TYPES)
                ->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists($this->table);
    }
}
