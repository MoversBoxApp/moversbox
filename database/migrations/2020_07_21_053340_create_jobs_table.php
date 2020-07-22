<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('truck_id')->unsigned()->default('1');
            $table->integer('job_status_id')->unsigned()->default('1');
            $table->integer('time_frame_id')->unsigned()->default('1');
            $table->integer('amountOfMovers');
            $table->string('start')->nullable();
            $table->string('end')->nullable();
            $table->float('estimatedTime');
            $table->timestamp('bookingdate');
            $table->timestamps();
            $table->foreign('truck_id')->references('id')->on('trucks');
            $table->foreign('job_status_id')->references('id')->on('job_statuses');
            $table->foreign('time_frame_id')->references('id')->on('time_frames');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jobs');
    }
}
