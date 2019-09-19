<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnsweroptionSelectedmeasureTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('answeroption_selectedmeasure', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('answeroption_id')->unsigned();
            $table->foreign('answeroption_id')->references('id')->on('answeroptions')->onDelete('cascade');
            $table->bigInteger('selectedmeasure_id')->unsigned();
            $table->foreign('selectedmeasure_id')->references('id')->on('selectedmeasures')->onDelete('cascade');
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
        Schema::dropIfExists('answeroption_selectedmeasure');
    }
}
