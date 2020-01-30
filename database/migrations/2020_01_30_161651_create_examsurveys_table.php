<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExamsurveysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('examsurveys', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id')->unsigned;
            $table->float('rightanswer1mark');
            $table->float('rightanswer2mark');
            $table->float('wronganswer1mark');
            $table->float('wronganswer2mark');
            $table->float('notanswered1mark');
            $table->float('notanswered2mark');
            $table->float('total');
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
        Schema::dropIfExists('examsurveys');
    }
}
