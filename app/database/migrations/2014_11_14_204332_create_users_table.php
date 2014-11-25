<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('users', function($table)
        {
            $table->increments('id');
            $table->string('wisportId', 7);
            $table->string('username', 128);
            $table->string('email');
            $table->string('password', 60);
            $table->string('first_name',80);
            $table->string('last_name', 80);
            $table->string('gender', 1);
            $table->date('birth_date');
            $table->string('phone');
            $table->integer('team');
            $table->timestamps();
            $table->rememberToken();
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::drop('users');
	}

}
