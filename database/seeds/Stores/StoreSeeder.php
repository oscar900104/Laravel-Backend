<?php

namespace Stores;


use Citmatel\Stores\Admin\Store;
use CompraDeTodo\Seeder;

class StoreSeeder extends Seeder
{
    /**
     * Tables for prerequisites apply.
     * @var array
     */
    public $tables = [
        'stores'
    ];

    public function run()
    {
        $this->initPrerequisites();

        Store::create([
            'name' => 'internet',
            'slug' => 'internet',
            'code' => 'internet',
            'template' => 'stores.internet'
        ]);
        Store::create(['name' => 'superfacil', 'slug' => 'superfacil', 'code' => 'superfacil', 'template' => 'stores']);
        Store::create([
            'name' => 'administre-su-negocio',
            'slug' => 'administre-su-negocio',
            'code' => 'administre-su-negocio',
            'template' => 'stores.asn'
        ]);

        Store::create([
            'name' => 'libreria',
            'slug' => 'libreria',
            'code' => 'libreria',
            'template' => 'stores.bookstore'
        ]);


        $this->resetPrerequisites();
    }
}