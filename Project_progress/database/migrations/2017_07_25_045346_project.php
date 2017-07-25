<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Project extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //创建项目表
        Schema::create('project',function (Blueprint $table){
        $table->increments('id');
        $table->string('name','50');
        $table->string('content');
        $table->string('github')->nullable();
        $table->string('user_id')->nullable();
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
