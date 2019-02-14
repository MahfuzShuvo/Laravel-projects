<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeacherTblTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teacher_tbl', function (Blueprint $table) {
            $table->increments('teacher_id');
            $table->string('teacher_name');
            $table->string('teacher_mobile');
            $table->string('teacher_email');
            $table->string('teacher_address');
            $table->string('teacher_designation');
            $table->string('teacher_department');
            $table->string('teacher_salary');
            $table->string('teacher_blood');
            $table->string('teacher_gender');
            $table->string('teacher_nationality');
            $table->string('teacher_religion');
            $table->string('teacher_marital_status');
            $table->string('teacher_password');
            $table->string('teacher_image');
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
        Schema::dropIfExists('teacher_tbl');
    }
}
