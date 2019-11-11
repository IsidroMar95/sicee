<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 60);
            $table->string('middleName', 60)->nullable();
            $table->string('firstLastName', 60);
            $table->string('secondLastName', 60);
            $table->string('phone', 13);
            $table->string('email')->unique();
            $table->string('address', 160);
            $table->string('zipCode', 8);
            $table->date(('birthday'));
            $table->string('username')->unique();
            $table->string('password');
            $table->string('curp', 18)->unique();
            $table->boolean('status')->default(true);
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
