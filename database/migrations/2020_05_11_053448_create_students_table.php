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
            $table->string('password')->nullable();
            
            $table->string('father_name');
            $table->string('relation');
            $table->string('father_ssn'); 
            $table->string('father_job');
            $table->string('father_mobile');
            $table->string('father_id');
            $table->string('type_of_stay');
            $table->string('grade');
            $table->string('taqdir')->nullable();
            $table->string('rate')->nullable();
            $table->string('department')->nullable();
            $table->string('sum')->nullable();
            $table->string('damin_name');
            $table->string('damin_ssn');
            $table->string('damin_mobile');
            $table->string('damin_job');
            $table->string('damin_id');
            $table->string('income');
            $table->string('number');
            $table->string('build')->nullable();
            $table->string('room_number')->nullable();
            $table->string('message')->nullable();
            $table->string('ekrar');
            $table->tinyInteger('is_accepted')->default(0);

            $table->foreignId('room_id')->nullable();

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
