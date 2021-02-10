<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTraininigsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('traininigs', function (Blueprint $table) {
            $table->id();
            $table->string('training_title');
            $table->string('trainer_name');
            $table->string('training_category');
            $table->string('training_fees');
              $table->string('trainer_designation');
            $table->string('affiliate_commission');
            $table->string('traning_file')->nullable();
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
        Schema::dropIfExists('traininigs');
    }
}
