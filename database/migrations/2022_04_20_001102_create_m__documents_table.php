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
        Schema::create('m__documents', function (Blueprint $table) {
            $table->id('pk_document_id');
            $table->unsignedBigInteger('fk_user_id');
            $table->foreign('fk_user_id')->references('pk_user_id')->on('m__users')->onUpdate('no action')->onDelete('no action');
            $table->string('cv');
            $table->string('IDcard_document');
            $table->string('certivicate');
            $table->string('transcript');
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
        Schema::dropIfExists('m__documents');
    }
};
