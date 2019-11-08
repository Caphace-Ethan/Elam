<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatSemesterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            Schema::create('semester', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('semester_name');
            $table->integer('semester_id')->unsigned();
            $table->date('semester_start');
            $table->date('semester_end');
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
