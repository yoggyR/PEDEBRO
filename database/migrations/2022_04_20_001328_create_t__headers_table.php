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
        Schema::create('t__headers', function (Blueprint $table) {
            $table->id('pk_header_id');
            $table->unsignedBigInteger('fk_user_id');
            $table->foreign('fk_user_id')->references('pk_user_id')->on('m__users')->onUpdate('no action')->onDelete('no action');
            $table->unsignedBigInteger('fk_bridge_id');
            $table->foreign('fk_bridge_id')->references('pk_bridge_id')->on('bridges')->onUpdate('no action')->onDelete('no action');
            $table->date('apply_date');
            $table->enum('applicant_status',['newest','accepted','rejected']);
            $table->enum('interview_status',['willing','waiting','refuse']);
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
        Schema::dropIfExists('t__headers');
    }
};
