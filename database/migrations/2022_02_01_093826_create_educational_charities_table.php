<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEducationalCharitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('educational_charities', function (Blueprint $table) {
            $table->id();
            $table->string('filee');
            $table->string('ngoNamee')->unique();
            $table->string('emaile')->unique();
            $table->string('ESTDe');
            $table->string('websitee');
            $table->longText('descriptione');
            $table->longText('description_twoe');
            $table->longText('description_threee');
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
        Schema::dropIfExists('educational_charities');
    }
}
