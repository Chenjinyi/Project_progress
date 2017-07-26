<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Progress extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //进度表
        Schema::create('progress',function (Blueprint $table){
            $table->increments('id');
            $table->string('title','50');
            $table->string('content');
            $table->string('user_id')->nullable();
            $table->string('project_id')->nullable();
            $table->string('status','1')->default("1");
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
        Schema::dropIfExists('project');
    }
}
