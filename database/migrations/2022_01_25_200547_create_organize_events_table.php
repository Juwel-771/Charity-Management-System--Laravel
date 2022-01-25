<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrganizeEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('organize_events', function (Blueprint $table) {
            $table->id();
            $table->string('file');
            $table->string('orgName');
            $table->string('firstName')->nullable();
            $table->string('lastName')->nullable();
            $table->string('email')->nullable();
            $table->string('eventName');
            $table->string('date');
            $table->string('time');
            $table->string('location');
            $table->string('eventType');
            $table->string('eventSponsor');
            $table->text('description');
            $table->text('purpose');
            $table->text('promote');
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
        Schema::dropIfExists('organize_events');
    }
}
