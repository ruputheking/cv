<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEducationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('education', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('school');
            $table->string('start_date')->nullable();
            $table->string('end_date')->nullable();
            $table->string('level');
            $table->string('slug')->unique();
            $table->timestamps();
        });

        Schema::create('education_user', function (Blueprint $table) {
            $table->integer('user_id');
            $table->integer('education_id');
            $table->primary(['user_id', 'education_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('education');
        Schema::dropIfExists('education_user');
    }
}
