<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFoodTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('food', function (Blueprint $table) {
            
			$table->id();
            $table->string('category');
            $table->string('firstName');
            $table->string('lastName');
            $table->integer('mobilePhone');
            $table->string('email');
            $table->string('town');
            $table->string('state');
            $table->integer('postCode');
            $table->string('heading');
            $table->longText('description');
            $table->string('selectMethod');
            // $table->unsignedBigInteger('donor_id');
            // $table->foreign('donor_id')->references('id')->on('donors')->nullable();
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
        Schema::dropIfExists('food');
    }
}
