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
        Schema::create('t__details', function (Blueprint $table) {
            $table->id('pk_detail_id');
            $table->unsignedBigInteger('fk_header_id');
            $table->foreign('fk_header_id')->references('pk_header_id')->on('t__headers')->onUpdate('no action')->onDelete('no action');
            $table->date('contact_date');
            $table->date('interview_date');
            $table->text('contact_message');
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
        Schema::dropIfExists('t__details');
    }
};
