<?php

use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{


    /**
     * Class names of the seeders to run.
     *
     * @var array
     */
    private $seeders = [
//        CountriesSeeder::class,
//        \Attributes\AttributeGroupSeeder::class,
//        \Attributes\AttributesSeeder::class,
//        \Stores\StoreSeeder::class,
//        \Services\ServicesSeeder::class,
//        \Merchants\MerchantSeeder::class,
//        \Categories\CategoriesSeeder::class,
        \Roles\PermissionSeeder::class
    ];


    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->seeders as $seeder) {
            //$this->command->info($seeder);
            $this->call($seeder);
        }
    }
}
