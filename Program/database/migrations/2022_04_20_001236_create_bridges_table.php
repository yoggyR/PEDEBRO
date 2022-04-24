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
        Schema::create('bridges', function (Blueprint $table) {
            $table->id('pk_bridge_id');

            $table->unsignedBigInteger('fk_job_id');
            $table->foreign('fk_job_id')->references('pk_job_id')->on('m__jobs')->onUpdate('no action')->onDelete('no action');

            $table->unsignedBigInteger('fk_level_id');
            $table->foreign('fk_level_id')->references('pk_level_id')->on('m__levels')->onUpdate('no action')->onDelete('no action');

            $table->unsignedBigInteger('fk_education_id');
            $table->foreign('fk_education_id')->references('pk_education_id')->on('m__educations')->onUpdate('no action')->onDelete('no action');

            $table->unsignedBigInteger('fk_location_id');
            $table->foreign('fk_location_id')->references('pk_location_id')->on('m__locations')->onUpdate('no action')->onDelete('no action');

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
        Schema::dropIfExists('bridges');
    }
};
