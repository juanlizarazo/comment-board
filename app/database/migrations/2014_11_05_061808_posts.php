<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Posts extends Migration {

	public function up()
	{
     	  Schema::create('posts', function($table)
          {
            $table->increments('id');
            $table->string('post', 150);
            $table->string('name');
            $table->timestamps();
          });
	}

	public function down()
	{
	  Schema::drop('posts');
	}
}
