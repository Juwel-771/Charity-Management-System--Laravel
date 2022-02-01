<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRefugeCharitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('refuge_charities', function (Blueprint $table) {
            $table->id();
            $table->string('file');
            $table->string('ngoName')->unique();
            $table->string('email')->unique();
            $table->string('ESTD');
            $table->string('website');
            $table->longText('description');
            $table->longText('description_two');
            $table->longText('description_three');
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
        Schema::dropIfExists('refuge_charities');
    }
}
