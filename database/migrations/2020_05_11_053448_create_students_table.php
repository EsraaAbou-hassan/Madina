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
            $table->string('studentName');
            $table->integer('studentSnn');
            $table->integer('code');
            $table->string('birthday');
            $table->string('residance');
            $table->string('address');
            $table->string('email');
            $table->integer('studentMobile');
            $table->integer(' student_year');
            $table->string('collage');
            $table->integer('student_id');
            $table->string('peciture');
            $table->string('password');
            $table->string('sure_password');
            $table->string('father_name');
            $table->string('relation');
            $table->integer('father_snn'); 
            $table->string('father_job');
            $table->integer('father_mobile');
            $table->integer('father_id');
            $table->string('type_of_stay');
            $table->string('grade');
            $table->string('taqdir');
            $table->string('rate');
            // $table->string('department');
            // $table->string('sum');
            $table->string(' damin_name');
            $table->integer('damin_snn');
            $table->integer('damin_mobile');
            $table->string('damin_job');
            $table->integer('damin_id');
            $table->string('income');
            $table->integer('number');
            $table->string(' build');
            $table->string(' room_id');
            $table->string('message');
            $table->text('ekrar');
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
