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
        Schema::create('m__jobs', function (Blueprint $table) {
            $table->id('pk_job_id');
            $table->string('job_name');
            $table->integer('max_age');
            $table->string('hard_skill');
            $table->string('soft_skill');
            $table->date('date_created');
            $table->date('closing_date');
            $table->text('description');
            $table->enum('job_status', ['Opened','Closed']);
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
        Schema::dropIfExists('m__jobs');
    }
};
