<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAuctionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('auctions', function (Blueprint $table) {
            $table->id();
            $table->string('file')->nullable();
            $table->string('date')->nullable();
            $table->string('time_one')->nullable();
            $table->string('time_two')->nullable();
            $table->string('heading')->nullable();
            $table->string('category')->nullable();
            $table->string('comment')->nullable();
            $table->longText('paragraph')->nullable();
            $table->string('fullName')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('bid')->nullable();
            $table->string('bidstart')->nullable();
            $table->integer('result')->nullable();
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
        Schema::dropIfExists('auctions');
    }
}
