<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m__users', function (Blueprint $table) {
            $table->id('pk_user_id');
            $table->unsignedBigInteger('fk_position_id');
            $table->foreign('fk_position_id')->references('pk_position_id')->on('m__positions')->onUpdate('no action')->onDelete('no action');
            $table->string('full_name');
            $table->enum('gender', ['Male', 'Female']);
            $table->string('place');
            $table->date('date_of_brith');
            $table->string('phone_number')->unique();
            $table->string('email')->unique();
            $table->string('address');
            $table->string('password');
            $table->bigInteger('IDcard_number')->unique()->nullable();
            $table->string('photo');
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
        Schema::dropIfExists('m__users');
    }
};
