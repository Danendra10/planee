<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event_organizer_data', function (Blueprint $table) {
            $table->id();
            $table->string('email');
            $table->string('services');
            $table->integer('lower_price')->unsigned();
            $table->integer('upper_price')->unsigned();
            $table->text('description');
            $table->string('duration');
            $table->string('location');
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
        Schema::dropIfExists('event_organizer_data');
    }
};