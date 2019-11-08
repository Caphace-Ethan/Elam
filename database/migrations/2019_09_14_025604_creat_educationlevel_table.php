<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatEducationlevelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('educationlevel', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('educationlevel_name');
            $table->string('educationlevel_code');
            $table->integer('educationlevel_staff_id')->unsigned();
            $table->foreign('educationlevel_staff_id')->references('id')->on('staffs');  
            $table->integer('educationlevel_assistancestaff_id')->unsigned();
            $table->foreign('educationlevel_assistancestaff_id')->references('id')->on('staffs');  
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
