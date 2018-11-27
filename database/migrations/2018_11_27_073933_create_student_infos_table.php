<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


class CreateStudentInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_infos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('student_name', 100);
            $table->string('student_id', 100);
            $table->string('father_name', 100);
            $table->string('mother_name', 100);
            $table->string('program', 100);
            $table->string('semester', 100);
            $table->string('SGPA', 100);
            $table->string('CGPA', 100);
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
        Schema::dropIfExists('student_infos');
    }
}
