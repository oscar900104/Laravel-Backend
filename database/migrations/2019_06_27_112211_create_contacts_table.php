<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emails', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('is_used_in_billing');
            $table->string('email');
            $table->string('contactable_type');
            $table->integer('contactable_id');
            $table->timestamps();
        });

        Schema::create('phones', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('is_used_in_billing');
            $table->string('number');
            $table->string('type');
            $table->string('contactable_type');
            $table->integer('contactable_id');
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
        Schema::dropIfExists('emails');
        Schema::dropIfExists('phones');
    }
}
