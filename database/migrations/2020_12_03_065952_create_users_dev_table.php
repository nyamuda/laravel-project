<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersDevTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_dev', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("username");
            $table->string("email");
            $table->string("password");
            $table->string("name");
            $table->string("surname");
            $table->string("job_title")->nullable();
            $table->string("bio")->nullabe();
            $table->string("mobile");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users_dev');
    }
}