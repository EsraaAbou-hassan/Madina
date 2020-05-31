<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nationality');
            $table->string('Kind_of_student');
            $table->string('student_name');
            $table->string('student_ssn');
            $table->string('code');
            $table->string('birthday');
            $table->string('residance');
            $table->string('address');
            $table->string('email');
            $table->string('student_mobile');
            $table->string('student_year');
            $table->string('collage');
            $table->string('student_id');
            $table->string('peciture');
            $table->string('password');
            $table->string('sure_password');
            $table->string('father_name');
            $table->string('relation');
            $table->string('father_ssn'); 
            $table->string('father_job');
            $table->string('father_mobile');
            $table->string('father_id');
            $table->string('type_of_stay');
            $table->string('grade');
            $table->string('taqdir');
            $table->string('rate');
            // $table->string('department');
            // $table->string('sum');
            $table->string('damin_name');
            $table->string('damin_ssn');
            $table->string('damin_mobile');
            $table->string('damin_job');
            $table->string('damin_id');
            $table->string('income');
            $table->string('number');
            $table->string('build');
            $table->string('room_id');
            $table->string('message');
            $table->string('ekrar');
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
        Schema::dropIfExists('students');
    }
}
