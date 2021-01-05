<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOperatingSystemTechnologyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('operating_system_technology', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('operating_system_id')->unsigned();
            $table->integer('technology_id')->unsigned();
            $table->foreign('operating_system_id')
                ->references('id')
                ->on('operating_systems')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('technology_id')
                ->references('id')
                ->on('technologies')
                ->onDelete('cascade')
                ->onUpdate('cascade');
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
        Schema::dropIfExists('operating_system_technology');
    }
}
