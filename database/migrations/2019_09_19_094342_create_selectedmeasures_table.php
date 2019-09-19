<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSelectedmeasuresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('selectedmeasures', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('measure_id')->unsigned();
            $table->foreign('measure_id')->references('id')->on('measures')->onDelete('cascade');
            $table->bigInteger('loggedsession_id')->unsigned();
            $table->foreign('loggedsession_id')->references('id')->on('loggedsessions')->onDelete('cascade');
            $table->integer('selectcount')->unsigned()->default(0);
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
        Schema::dropIfExists('selectedmeasures');
    }
}
