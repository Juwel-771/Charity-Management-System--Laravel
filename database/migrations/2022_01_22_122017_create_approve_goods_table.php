<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApproveGoodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('approve_goods', function (Blueprint $table) {
            $table->id();
            $table->string('firstName');
            $table->string('lastName');
            $table->string('mobilePhone');
            $table->string('email')->unique();
            $table->string('town');
            $table->string('state');
            $table->integer('postCode');
            $table->string('item');
            $table->string('goodsName');
            $table->string('quantity');
            $table->string('conditions');
            $table->string('pickPoin');
            $table->string('description');
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
        Schema::dropIfExists('approve_goods');
    }
}
