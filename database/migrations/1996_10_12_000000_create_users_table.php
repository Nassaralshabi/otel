<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->string('first_name');
            $table->string('last_name');
            $table->string('hotel_name')->nullable();
            $table->string('email',250)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->integer('phone')->unique();
            $table->string('city')->nullable();
            $table->string('neighborhood')->nullable();
            $table->string('address')->nullable();
            $table->string('password');
            $table->string('google_id')->nullable();
            $table->string('fb_id')->nullable();
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
