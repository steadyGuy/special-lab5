<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateToursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tours', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->integer('tour_type_id');
            $table->string('slug');
            $table->string('description')->nullable();
            $table->string('image')->nullable();
            $table->double('price')->default(0);
            $table->boolean('isSpecial')->default(false);
            $table->integer('peopleCount')->default(1);
            $table->integer('stars')->default(5);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tours');
    }
}
