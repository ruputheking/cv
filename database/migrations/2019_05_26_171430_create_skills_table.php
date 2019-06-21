<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSkillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skills', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->integer('percentage');
            $table->string('slug')->unique();
            $table->timestamps();
        });
        Schema::create('skill_user', function (Blueprint $table) {
            $table->integer('user_id');
            $table->integer('skill_id');
            $table->integer('percentage')->nullable();
            $table->primary(['user_id', 'skill_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('skill_user');
        Schema::dropIfExists('skills');
    }
}
