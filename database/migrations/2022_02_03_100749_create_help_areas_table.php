<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHelpAreasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('help_areas', function (Blueprint $table) {
            $table->id();
            $table->string('file');
            $table->string('problem');
            $table->string('firstName');
            $table->string('lastName');
            $table->string('email');
            $table->string('phone');
            $table->string('address_one');
            $table->string('address_two');
            $table->string('city');
            $table->string('state');
            $table->string('postalCode');
            $table->text('description');
            $table->string('postalOffice');
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
        Schema::dropIfExists('help_areas');
    }
}
