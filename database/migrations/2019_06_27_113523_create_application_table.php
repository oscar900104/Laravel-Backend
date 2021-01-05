<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->increments('id');
            $table->string('subject');
            $table->boolean('has_publicity');
            $table->integer('additional_site_storage');
            $table->integer('additional_database_storage');
            $table->integer('ftp_count');
            $table->integer('additional_domain_count');
            $table->string('path_index_file');
            $table->string('connectivity_email');
            $table->string('technology_version');
            $table->string('databaseType_version');
            $table->unsignedInteger('technology_id');
            $table->unsignedInteger('data_base_type_id');
            $table->unsignedInteger('site_type_id');
            $table->foreign('technology_id')
                ->references('id')
                ->on('technologies')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreign('site_type_id')
                ->references('id')
                ->on('site_types')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreign('data_base_type_id')
                ->references('id')
                ->on('data_base_types')
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
        Schema::dropIfExists('applications');
    }
}
