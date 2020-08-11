<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCargosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cargos', function (Blueprint $table) {
            $table->id();
            $table->integer('job_id')->unsigned()->default('1');
            $table->integer('item_id')->unsigned()->default('1');
            $table->timestamps();
            $table->foreign('job_id')->references('id')->on('jobs');
            $table->foreign('item_id')->references('id')->on('items');
            $table->float('height');
            $table->float('width');
            $table->float('weight');
            $table->float('depth');
            $table->integer('quantity');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cargos');
    }
}
