<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHeroTypesTable extends Migration
{
    protected $table = 'hero_types';

    public function up()
    {
        Schema::create($this->table, function (Blueprint $table) {
            $table->smallIncrements('id');
            $table->string('key');
            $table->string('name');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists($this->table);
    }
}
