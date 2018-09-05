<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableSessions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sessions', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('start_class_time');
            $table->integer('class_hours')->default(1);
            $table->enum('class_model', ['virtual_class', 'class_attendance']);
            $table->enum('request_status', ['accepted', 'not_accepted', 'rejected'])->default('not_accepted');

            $table->integer('class')->default(1);
            $table->foreign('class')->references('id')->on('student_teacher')->onDelete('cascade');
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
        Schema::dropIfExists('sessions');
    }
}
