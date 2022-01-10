<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClothsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cloths', function (Blueprint $table) {
            $table->id();
            $table->string('firstName');
            $table->string('lastName');
            $table->string('mobilePhone');
            $table->string('email');
            $table->string('town');
            $table->string('state');
            $table->integer('postCode');
            $table->string('checkBox');
            $table->string('size');
            $table->string('quantity');
            $table->string('location');
            $table->string('colthName');
            $table->string('status');
            $table->string('comment');
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
        Schema::dropIfExists('cloths');
    }
}
