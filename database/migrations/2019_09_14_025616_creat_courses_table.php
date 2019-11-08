<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('courses', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('course_name');
            $table->string('course_number'); /**       */
            $table->integer('educationlevel_id')->unsigned();
            $table->foreign('educationlevel_id')->references('id')->on('educationlevel');
            $table->integer('department_id')->unsigned(); 
            $table->foreign('department_id')->references('id')->on('departments');
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
