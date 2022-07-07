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
        Schema::create('vendor_data', function (Blueprint $table) {
            $table->id();
            $table->string('email');
            $table->string('services');
            $table->string('lower_price');
            $table->string('upper_price');
            $table->text('description');
            $table->text('duration');
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
        Schema::dropIfExists('vendor_data');
    }
};
