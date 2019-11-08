<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatClassTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
           Schema::create('class', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('class_name');
            $table->string('class_code'); 
            $table->integer('educationlevel_id')->unsigned();
            $table->foreign('educationlevel_id')->references('id')->on('educationlevel');
            $table->date('start_date');
            $table->date('end_date');
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
