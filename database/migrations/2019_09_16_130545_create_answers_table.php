<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('answers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('loggedsession_id')->unsigned();
            $table->foreign('loggedsession_id')->references('id')->on('loggedsessions')->onDelete('cascade');
            $table->bigInteger('answeroption_id')->unsigned();
            $table->foreign('answeroption_id')->references('id')->on('answeroptions')->onDelete('cascade');
            $table->tinyInteger('selected')->unsigned()->default(false);
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
        Schema::dropIfExists('answers');
    }
}
