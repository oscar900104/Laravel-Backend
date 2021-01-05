<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResponsablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('administrators', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('dni');
            $table->string('address');
            $table->unsignedInteger('application_id');
            $table->foreign('application_id')
                ->references('id')
                ->on('applications')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->timestamps();
        });

        Schema::create('webmasters', function (Blueprint $table) {
        $table->increments('id');
        $table->string('name');
        $table->unsignedInteger('application_id');
        $table->foreign('application_id')
            ->references('id')
            ->on('applications')
            ->onUpdate('cascade')
            ->onDelete('cascade');
        $table->timestamps();
    });
        Schema::create('forum_moderators', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('dni');
            $table->unsignedInteger('forum_application_id');
            $table->foreign('forum_application_id')
                ->references('id')
                ->on('forum_applications')
                ->onUpdate('cascade')
                ->onDelete('cascade');
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
        Schema::dropIfExists('administrators');
    }
}
