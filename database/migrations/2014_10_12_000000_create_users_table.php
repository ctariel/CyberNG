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
            $table->increments('id');
            $table->string('email')->unique();
            $table->string('username')->unique();
            $table->string('password');
            $table->string('firstname')->nullable();
            $table->string('lastname')->nullable();
            $table->tinyInteger('sex')->default(0)->nullable();
            $table->date('birthday')->nullable();
            $table->string('address')->nullable();
            $table->integer('idCity')->nullable();
            $table->date('registrationDate')->nullable();
            $table->string("homePhone")->nullable();
            $table->string("workPhone")->nullable();
            $table->string("mobilePhone")->nullable();
            //$table->enum('role', ['user', 'anim', 'admin'])->default('user');
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
