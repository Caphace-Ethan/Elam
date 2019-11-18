<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatModulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modules', function (Blueprint $table) {
            $table->integer('module_id')->unsigned();
            $table->string('module_name');
            $table->string('module_code');
            $table->integer('educationlevel_id')->unsigned();
            // $table->foreign('educationlevel_id')->references('id')->on('educationlevel');
            $table->integer('module_semester_id')->unsigned();
            // $table->foreign('module_semester_id')->references('module_id')->on('semester');  
            $table->timestamps();
    
    });    }

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
