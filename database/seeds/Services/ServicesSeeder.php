<?php

namespace Services;


use Citmatel\Services\Deliveries\Admin\Carrier;
use Citmatel\Services\Driver;
use CompraDeTodo\Seeder;

class ServicesSeeder extends Seeder
{
    public $tables = [
        'service_drivers'
    ];

    /**
     *
     */
    public function run()
    {
        $this->initPrerequisites();

        Driver::create(['service_class' => \Citmatel\Services\Internet\Admin\Carrier::class, 'name' => 'Pagos de Servicios de Citmatel', 'description' => 'Pagos de Servicios de Citmatel']);
        Driver::create(['service_class' => \Citmatel\Services\Bookstore\Admin\Carrier::class, 'name' => 'Descargas en Linea', 'description' => 'Descargas en Linea']);
        Driver::create(['service_class' => \Citmatel\Services\Mobiles\Admin\Carrier::class, 'name' => 'Recargas Internacionales', 'description' => 'Recargas Internacionales']);
        Driver::create(['service_class' => \Citmatel\Services\Ais\Admin\Carrier::class, 'name' => 'Tarjetas Regalo', 'description' => 'Tarjetas Regalo']);
        Driver::create(['service_class' => \Citmatel\Services\Licenses\Admin\Carrier::class, 'name' => 'Administre su Negocio', 'description' => 'Administre su Negocio']);
        Driver::create(['service_class' => \Citmatel\Services\Deliveries\Admin\Carrier::class, 'name' => 'Entregas a Domicilio', 'description' => 'Entregas a Domicilio']);


        $this->resetPrerequisites();
    }
}