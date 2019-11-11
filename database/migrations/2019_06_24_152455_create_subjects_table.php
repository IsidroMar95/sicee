<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subjects', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 60)->unique();
            $table->bigInteger('career_id')->unsigned()->nullable();
            $table->bigInteger('grade_level_id')->unsigned()->nullable();
            $table->bigInteger('school_period_id')->unsigned()->nullable();
            $table->bigInteger('teacher_id')->unsigned()->nullable();
            $table->boolean('status')->default(true);
            $table->timestamps();

            // Relaciones
            $table->foreign('grade_level_id')->references('id')->on('grade_levels')
                ->onUpdate('cascade');

            $table->foreign('career_id')->references('id')->on('careers')
                ->onUpdate('cascade');

            $table->foreign('school_period_id')->references('id')->on('school_periods')
                ->onUpdate('cascade');

            $table->foreign('teacher_id')->references('id')->on('teachers')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subjects');
    }
}
