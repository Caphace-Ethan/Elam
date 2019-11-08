<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('news_title');
            $table->longText('news_content');
            $table->integer('staff_id')->unsigned(); /**       */
            $table->foreign('staff_id')->references('id')->on('staffs');
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
