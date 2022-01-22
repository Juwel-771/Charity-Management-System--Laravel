<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApproveMedicinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('approve_medicines', function (Blueprint $table) {
            $table->id();
            $table->string('firstName');
            $table->string('lastName');
            $table->string('mobilePhone');
            $table->string('email');
            $table->string('town');
            $table->string('state');
            $table->integer('postCode');
            $table->string('selectTime');
            $table->string('selectDate');
            $table->string('drugName');
            $table->string('lotNumber');
            $table->string('expireTime');
            $table->string('source');
            $table->string('quantity');
            $table->string('ndc');
            $table->string('drugStrength');
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
        Schema::dropIfExists('approve_medicines');
    }
}
