<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vlads', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('Tovar');
            $table->string('Price');
            $table->string('img');
            $table->string('Terraria');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vlads');
    }
};
