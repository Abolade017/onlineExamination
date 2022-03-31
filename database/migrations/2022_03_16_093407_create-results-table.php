<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('results', function(Blueprint $table){
            $table->id();
            $table->foreignId('course_id');
            $table->string('course_name');
            $table->string('course_code');
            $table->integer('attempted_question');
            $table->foreignId('user_id');
            $table->tinyInteger('correct_answer');
            $table->integer('score');
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
        //
    }
}
