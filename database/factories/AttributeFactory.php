<?php

use Citmatel\Catalogue\Admin\Attributes\Attribute;
use Citmatel\Catalogue\Admin\Attributes\Group;
use Citmatel\Catalogue\Admin\Repositories\BrandsRepository;
use Citmatel\Catalogue\Admin\Repositories\FormatsRepository;
use Citmatel\Catalogue\Admin\Repositories\TypologiesRepository;
use Citmatel\Catalogue\Admin\Repositories\WarrantiesRepository;
use Citmatel\Languages\Admin\Repositories\LanguagesRepository;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

#region attributes_groups

$factory->defineAs(Group::class, 'general', function (Faker $faker) {

    return [
        'name'         => 'general',
        'display_name' => 'General',
        'description'  => 'Grupo que agrupa los attributos generales de un producto.'
    ];
});

$factory->defineAs(Group::class, 'stock', function (Faker $faker) {

    return [
        'name'         => 'stock',
        'display_name' => 'Inventario',
        'description'  => 'Grupo que agrupa los attributos de inventario de un producto.'
    ];
});

$factory->defineAs(Group::class, 'images', function (Faker $faker) {

    return [
        'name'         => 'images',
        'display_name' => 'Imagenes',
        'description'  => 'Grupo que agrupa los attributos asociado a las imagenes de un producto.'
    ];
});

$factory->defineAs(Group::class, 'order', function (Faker $faker) {

    return [
        'name'         => 'order',
        'display_name' => 'Pedidos',
        'description'  => 'Grupo que agrupa los attributos asociado a  los pedidos.'
    ];
});

$factory->defineAs(Group::class, 'metadata', function (Faker $faker) {

    return [
        'name'         => 'metadata',
        'display_name' => 'Metadatos',
        'description'  => 'Grupo que agrupa los attributos asociado a  los metadatos.'
    ];
});

$factory->defineAs(Group::class, 'bookstore', function (Faker $faker) {

    return [
        'name'         => 'bookstore',
        'display_name' => 'Libreria',
        'description'  => 'Grupo que agrupa los attributos asociado a  los metadatos.'
    ];
});

$factory->defineAs(Group::class, 'promotional', function (Faker $faker) {

    return [
        'name'         => 'promotional',
        'display_name' => 'Promociones',
        'description'  => 'Grupo que agrupa los attributos asociado a los estados promocionales.'
    ];
});

$factory->defineAs(Group::class, 'warranties', function (Faker $faker) {

    return [
        'name'         => 'warranties',
        'display_name' => 'Garantias',
        'description'  => 'Grupo que agrupa los attributos asociado a la garantía de un producto.'
    ];
});

$factory->defineAs(Group::class, 'brands', function (Faker $faker) {

    return [
        'name'         => 'brands',
        'display_name' => 'Marcas',
        'description'  => 'Grupo que agrupa los attributos asociado a las marcas de un producto.'
    ];
});

$factory->defineAs(Group::class, 'downloadables', function (Faker $faker) {

    return [
        'name'         => 'downloadables',
        'display_name' => 'Descargables',
        'description'  => 'Grupo que agrupa los attributos asociado a las descatgas.'
    ];
});


$factory->defineAs(Group::class, 'print_on_demand', function (Faker $faker) {

    return [
        'name'         => 'print_on_demand',
        'display_name' => 'Impresión Bajo Demanda',
        'description'  => 'Grupo que agrupa los attributos asociado a las impresiones bajo demanda.'
    ];
});

$factory->defineAs(Group::class, 'logistic', function (Faker $faker) {

    return [
        'name'         => 'logistic',
        'display_name' => 'Logística',
        'description'  => 'Grupo que agrupa los attributos asociado a la logistíca de distribución.'
    ];
});

#endregion

#region attributes

#region general 1
$factory->defineAs(Attribute::class, 'code', function (Faker $faker) {

    return [
        'name'         => 'code',
        'display_name' => 'código',
        'description'  => 'Attributo que representa el código de proveedor un producto.',
        'order'        => 1,
        'type'         => 'string',
        'group_id'     => 1
    ];
});

$factory->defineAs(Attribute::class, 'name', function (Faker $faker) {

    return [
        'name'         => 'name',
        'display_name' => 'nombre',
        'description'  => 'Attributo que representa el nombre de los productos.',
        'order'        => 2,
        'type'         => 'text',
        'group_id'     => 1
    ];
});

$factory->defineAs(Attribute::class, 'published', function (Faker $faker) {

    return [
        'name'         => 'published',
        'display_name' => 'publicado',
        'description'  => 'Attributo que representa si un producto está publicado o no.',
        'order'        => 3,
        'type'         => 'boolean',
        'group_id'     => 1
    ];
});

$factory->defineAs(Attribute::class, 'active_range', function (Faker $faker) {

    return [
        'name'         => 'active_range',
        'display_name' => 'Activo Desde-Hasta',
        'description'  => 'Attributo que representa la fecha inicial y final de disponibilidad a la venta de un producto.',
        'order'        => 4,
        'type'         => 'daterange',
        'group_id'     => 1
    ];
});

$factory->defineAs(Attribute::class, 'description', function (Faker $faker) {

    return [
        'name'         => 'description',
        'display_name' => 'descripción',
        'description'  => 'Attributo que representa la descripción de un producto.',
        'order'        => 5,
        'type'         => 'textarea',
        'group_id'     => 1
    ];
});

#endregion

#region stock  2

$factory->defineAs(Attribute::class, 'quantity', function (Faker $faker) {

    return [
        'name'         => 'quantity',
        'display_name' => 'cantidad',
        'description'  => 'Attributo que representa la cantidad disponible de un producto.',
        'order'        => 1,
        'type'         => 'number',
        'group_id'     => 2
    ];
});

$factory->defineAs(Attribute::class, 'measure_unity', function (Faker $faker) {

    return [
        'name'         => 'measure_unity',
        'display_name' => 'Unidad de Medida',
        'description'  => 'Attributo que representa la cantidad disponible de un producto.',
        'order'        => 2,
        'type'         => 'string',
        'group_id'     => 2
    ];
});

$factory->defineAs(Attribute::class, 'weight', function (Faker $faker) {

    return [
        'name'         => 'weight',
        'display_name' => 'Peso',
        'description'  => 'Attributo que representa el peso de un producto.',
        'order'        => 3,
        'type'         => 'string',
        'group_id'     => 2
    ];
});

$factory->defineAs(Attribute::class, 'min_quantity', function (Faker $faker) {

    return [
        'name'         => 'min_quantity',
        'display_name' => 'cantidad mínima',
        'description'  => 'Attributo que representa la cantidad  mínima en inventario disponible de un producto.',
        'order'        => 4,
        'type'         => 'number',
        'group_id'     => 2
    ];
});

$factory->defineAs(Attribute::class, 'min_quantity_in_order', function (Faker $faker) {

    return [
        'name'         => 'min_quantity_in_order',
        'display_name' => 'cantidad mínima en un pedido',
        'description'  => 'Attributo que representa la cantidad  mínima que debe comprar un cliente en cada compra.',
        'order'        => 5,
        'type'         => 'number',
        'group_id'     => 2
    ];
});

$factory->defineAs(Attribute::class, 'max_quantity_in_order', function (Faker $faker) {

    return [
        'name'         => 'max_quantity_in_order',
        'display_name' => 'cantidad máxima en un pedido',
        'description'  => 'Attributo que representa la cantidad  máxima que debe comprar un cliente en cada compra.',
        'order'        => 3,
        'type'         => 'number',
        'group_id'     => 2
    ];
});

#endregion

#region images 3

$factory->defineAs(Attribute::class, 'image', function (Faker $faker) {

    return [
        'name'         => 'image',
        'display_name' => 'Imagen',
        'description'  => 'Attributo que representa la imagen pequena de un producto.',
        'order'        => 1,
        'type'         => 'image',
        'group_id'     => 3
    ];
});

$factory->defineAs(Attribute::class, 'gallery', function (Faker $faker) {

    return [
        'name'         => 'gallery',
        'display_name' => 'galleria',
        'description'  => 'Attributo que representa la imagen pequena de un producto.',
        'order'        => 2,
        'type'         => 'image',
        'group_id'     => 3
    ];
});

#endregion

#region order 4

$factory->defineAs(Attribute::class, 'price', function (Faker $faker) {

    return [
        'name'         => 'price',
        'display_name' => 'precio',
        'description'  => 'Attributo que representa el precio de los productos.',
        'order'        => 1,
        'type'         => 'string',
        'group_id'     => 4
    ];
});

$factory->defineAs(Attribute::class, 'deposit', function (Faker $faker) {

    return [
        'name'         => 'deposit',
        'display_name' => 'deposito',
        'description'  => 'Attributo que representa el deposito de los productos.',
        'order'        => 2,
        'type'         => 'string',
        'group_id'     => 4
    ];
});

$factory->defineAs(Attribute::class, 'service', function (Faker $faker) {

    return [
        'name'         => 'service',
        'display_name' => 'service',
        'description'  => 'Attributo que representa el nombre de los productos.',
        'order'        => 3,
        'type'         => 'string',
        'group_id'     => 4
    ];
});

#endregion

#region metadata 5

$factory->defineAs(Attribute::class, 'title', function (Faker $faker) {

    return [
        'name'         => 'title',
        'display_name' => 'title',
        'description'  => 'Attributo que representa el metadata title.',
        'order'        => 1,
        'type'         => 'string',
        'group_id'     => 5
    ];
});

$factory->defineAs(Attribute::class, 'meta_description', function (Faker $faker) {

    return [
        'name'         => 'meta_description',
        'display_name' => 'meta_description',
        'description'  => 'Attributo que representa el metada description.',
        'order'        => 2,
        'type'         => 'long_string',
        'group_id'     => 5
    ];
});

$factory->defineAs(Attribute::class, 'keywords', function (Faker $faker) {

    return [
        'name'         => 'keywords',
        'display_name' => 'keywords',
        'description'  => 'Attributo que representa el Attributo que representa el metada keywords.',
        'order'        => 3,
        'type'         => 'long_string',
        'group_id'     => 5
    ];
});

#endregion

#region bookstore 6
$factory->defineAs(Attribute::class, 'format', function (Faker $faker) {

    return [
        'name'          => 'format',
        'display_name'  => 'formato',
        'description'   => 'Attributo que representa el formato de un producto.',
        'order'         => 2,
        'type'          => 'option',
        'group_id'      => 6,
        'specification' => FormatsRepository::class
    ];
});

$factory->defineAs(Attribute::class, 'typology', function (Faker $faker) {

    return [
        'name'          => 'typology',
        'display_name'  => 'tipología',
        'description'   => 'Attributo que representa el formato de un producto.',
        'order'         => 1,
        'type'          => 'option',
        'group_id'      => 6,
        'specification' => TypologiesRepository::class
    ];
});

$factory->defineAs(Attribute::class, 'bookstore_language', function (Faker $faker) {

    return [
        'name'          => 'bookstore_language',
        'display_name'  => 'Idioma',
        'description'   => 'Attributo que representa el formato de un producto.',
        'order'         => 3,
        'type'          => 'multiple',
        'group_id'      => 6,
        'specification' => LanguagesRepository::class
    ];
});

$factory->defineAs(Attribute::class, 'authors', function (Faker $faker) {

    return [
        'name'          => 'author',
        'display_name'  => 'Autor',
        'description'   => 'Attributo que representa el autor de un producto.',
        'order'         => 4,
        'type'          => 'multiple',
        'group_id'      => 6,
        'specification' => \Citmatel\Bookstore\Admin\Repositories\AuthorRepository::class
    ];
});

$factory->defineAs(Attribute::class, 'editorials', function (Faker $faker) {

    return [
        'name'          => 'editorial',
        'display_name'  => 'Editorial',
        'description'   => 'Attributo que representa el editorial de un producto.',
        'order'         => 5,
        'type'          => 'multiple',
        'group_id'      => 6,
        'specification' => \Citmatel\Bookstore\Admin\Repositories\EditorialRepository::class
    ];
});

$factory->defineAs(Attribute::class, 'chapter', function (Faker $faker) {

    return [
        'name'         => 'chapter',
        'display_name' => 'fragmento',
        'description'  => 'Attributo que representa el fichero de descarga de un producto.',
        'order'        => 6,
        'type'         => 'boolean',
        'group_id'     => 6
    ];
});

#endregion

#region promotional 7

$factory->defineAs(Attribute::class, 'promotional_status', function (Faker $faker) {

    return [
        'name'          => 'promotional_status',
        'display_name'  => 'Estado Promocional',
        'description'   => 'Attributo que representa el Estado Promocional de un producto.',
        'order'         => 0,
        'type'          => 'multiple',
        'group_id'      => 7,
        'specification' => \Citmatel\Catalogue\Admin\Repositories\PromotionalStatusRepository::class
    ];
});

//todo find better idea to represent this

$factory->defineAs(Attribute::class, 'new_order', function (Faker $faker) {

    return [
        'name'          => 'new_order',
        'display_name'  => 'Orden Lista de Productos Nuevos',
        'description'   => 'Attributo que representa el Estado Promocional de un producto.',
        'order'         => 1,
        'type'          => 'number',
        'group_id'      => 7,
        'specification' => ''
    ];
});

$factory->defineAs(Attribute::class, 'recommendation_order', function (Faker $faker) {

    return [
        'name'          => 'recommendation_order',
        'display_name'  => 'Orden Lista de Productos Recomendados',
        'description'   => 'Attributo que representa el Estado Promocional de un producto.',
        'order'         => 1,
        'type'          => 'number',
        'group_id'      => 7,
        'specification' => ''
    ];
});

$factory->defineAs(Attribute::class, 'most_sale_order', function (Faker $faker) {

    return [
        'name'          => 'most_sale_order',
        'display_name'  => 'Orden Lista de Productos Vendidos',
        'description'   => 'Attributo que representa el Estado Promocional de un producto.',
        'order'         => 1,
        'type'          => 'number',
        'group_id'      => 7,
        'specification' => ''
    ];
});

#endregion

#region warranties 8

$factory->defineAs(Attribute::class, 'warranty', function (Faker $faker) {

    return [
        'name'          => 'warranty',
        'display_name'  => 'Garantia',
        'description'   => 'Attributo que representa el Estado Promocional de un producto.',
        'order'         => 0,
        'type'          => 'multiple',
        'group_id'      => 8,
        'specification' => WarrantiesRepository::class
    ];
});
#endregion

#region brands 9
$factory->defineAs(Attribute::class, 'brand', function (Faker $faker) {

    return [
        'name'          => 'brand',
        'display_name'  => 'Marcas',
        'description'   => 'Attributo que representa el Estado Promocional de un producto.',
        'order'         => 0,
        'type'          => 'multiple',
        'group_id'      => 9,
        'specification' => BrandsRepository::class
    ];
});
#endregion

#region downloadables 10

$factory->defineAs(Attribute::class, 'downloadable', function (Faker $faker) {

    return [
        'name'         => 'downloadable',
        'display_name' => 'descargable',
        'description'  => 'Attributo que representa el fichero de descarga de un producto.',
        'order'        => 1,
        'type'         => 'downloadable',
        'group_id'     => 10
    ];
});
#endregion

#region print_on_demand 11
$factory->defineAs(Attribute::class, 'print_link', function (Faker $faker) {

    return [
        'name'         => 'print_link',
        'display_name' => 'Link de Impresion',
        'description'  => 'Attributo que representa el fichero de descarga de un producto.',
        'order'        => 1,
        'type'         => 'text',
        'group_id'     => 11
    ];
});
#endregion

#region logistic 12

$factory->defineAs(Attribute::class, 'shipmentService', function (Faker $faker) {

    return [
        'name'          => 'shipment_service',
        'display_name'  => 'Servicio de Entrega',
        'description'   => 'Attributo que representa el formato de un producto.',
        'order'         => 1,
        'type'          => 'option',
        'specification' => 'Citmatel\Sales\Admin\Shipments\Repositories\ShipmentServicesRepository',
        'group_id'      => 12
    ];
});

$factory->defineAs(Attribute::class, 'supplier', function (Faker $faker) {

    return [
        'name'         => 'supplier',
        'display_name' => 'proveedor',
        'description'  => 'Attributo que representa el proveedor de un producto.',
        'order'        => 2,
        'type'         => 'option',
        'group_id'     => 12,
        'specification' =>\Citmatel\Suppliers\Admin\Repositories\SuppliersRepository::class
    ];
});

#endregion

#region attributes_restrictions


#endregion