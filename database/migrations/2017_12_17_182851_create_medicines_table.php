<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMedicinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medicines', function (Blueprint $table) {
            $table->increments('id');
            $table->string('medicine_name',20);
            $table->decimal('price',3,2);
            $table->string('category');
            $table->string('medicine_code',4);
            $table->text('description');
            $table->string('images',300);
            $table->string('slug');
            $table->integer('pharmacy_id')->unsigned();
            $table->integer('quantity');
            $table->boolean('visibility');
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
        Schema::drop('medicines');
    }
}
