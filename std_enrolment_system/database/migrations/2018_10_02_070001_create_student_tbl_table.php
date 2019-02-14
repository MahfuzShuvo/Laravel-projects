<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentTblTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_tbl', function (Blueprint $table) {
            $table->increments('student_id');
            $table->string('student_name');
            $table->string('student_fathersname');
            $table->string('student_mothersname');
            $table->string('student_address');
            $table->string('student_mobile');
            $table->string('student_email');
            $table->string('student_roll');
            $table->string('student_department');
            $table->string('student_blood');
            $table->string('student_gender');
            $table->string('student_nationality');
            $table->string('student_religion');
            $table->string('student_image');
            $table->string('student_password');
            $table->string('student_birthyear');
            $table->string('student_admissionyear');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student_tbl');
    }
}
