<?php
namespace CompraDeTodo;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder as LaravelSeeder;
use Illuminate\Support\Facades\DB;

abstract class Seeder extends LaravelSeeder {

    public $minRecharge = 20;
    public $maxRecharge = 100;

    /**
     * Tables for prerequisites apply.
     *
     * @var array
     */
    public $tables = [];

    /**
     * Initialize prerequisites requires for the correct execution of the seeder.
     *
     * return void.
     */
    public function initPrerequisites()
    {
        Model::unguard();

        DB::statement('SET FOREIGN_KEY_CHECKS=0;'); //Disable foreign key check for this connection.

        foreach ($this->tables as $table) {
            DB::table($table)->truncate();
        }
    }

    /**
     * Reset the prerequisites to its previous state.
     *
     * return void.
     */
    public function     resetPrerequisites()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=1;'); //Enable foreign key check for this connection.

        Model::reguard();
    }

}