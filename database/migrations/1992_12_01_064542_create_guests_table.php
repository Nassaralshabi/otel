<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGuestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guests', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('guest_type');
            $table->string('approve_type');
            $table->integer('approve_number');
            $table->string('place_of_issue');
            $table->date('date_of_birth');
            $table->string('email')->unique();
            $table->integer('phone_of_work')->unique();
            $table->string('category');
            $table->string('nationalty');
            $table->integer('id_copy');
            $table->date('date_of_expiry');
            $table->string('kind');
            $table->integer('phone')->unique();
            $table->string('place_of_work');
            $table->string('address');
            $table->string('note');
            $table->string('note_2');
            
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
        Schema::dropIfExists('guests');
    }
}