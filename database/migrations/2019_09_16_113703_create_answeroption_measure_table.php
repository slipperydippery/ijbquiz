<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnsweroptionMeasureTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('answeroption_measure', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('answeroption_id')->unsigned();
            $table->foreign('answeroption_id')->references('id')->on('answeroptions')->onDelete('cascade');
            $table->bigInteger('measure_id')->unsigned();
            $table->foreign('measure_id')->references('id')->on('measures')->onDelete('cascade');
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
        Schema::dropIfExists('answeroption_measure');
    }
}
