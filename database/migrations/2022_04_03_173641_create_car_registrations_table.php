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
        Schema::create('car_registrations', function (Blueprint $table) {
            $table->id();
            $table->string('purchase_date');
            $table->string('advance_date');
            $table->string('serial_no');
            $table->string('registration_no');
            $table->string('model');
            $table->string('model_year');
            $table->string('chases_no');
            $table->string('engine_no');
            $table->string('quota');
            $table->string('mark');
            $table->string('color');
            $table->string('power');
            $table->string('number_plate');
            $table->string('file');
            $table->string('copy');
            $table->string('total_documents');
            $table->string('token');
            $table->tinyInteger('partenership');
            $table->tinyInteger('vendor');
            $table->string('purchased_price');
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
        Schema::dropIfExists('car_registrations');
    }
};
