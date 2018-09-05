<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableStudentTheacher extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_teacher', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('teacher')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->float('score');
            $table->integer('subject_id')->unsigned();
            $table->timestamps();

            $table->foreign('teacher')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('subject_id')->references('id')->on('subjects')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student_teacher');
    }
}
