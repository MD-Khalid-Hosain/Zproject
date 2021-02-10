<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConsultantBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consultant_bookings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('consultant_id');
            $table->foreignId('user_id');
            $table->date('booking_date');
            $table->string('cost');
            $table->string('commission');
            $table->string('time');
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
        Schema::dropIfExists('consultant_bookings');
    }
}
