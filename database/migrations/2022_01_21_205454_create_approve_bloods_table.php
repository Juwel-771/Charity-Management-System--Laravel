<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApproveBloodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('approve_bloods', function (Blueprint $table) {
            $table->id();
            $table->string('firstName');
            $table->string('lastName');
            $table->integer('mobilePhone');
            $table->string('email')->unique();
            $table->string('town');
            $table->string('state');
            $table->integer('postCode');
            $table->string('clinic');
            $table->string('selectTime');
            $table->string('selectDate');
            $table->string('description');
            $table->string('bloodGroup');
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
        Schema::dropIfExists('approve_bloods');
    }
}
