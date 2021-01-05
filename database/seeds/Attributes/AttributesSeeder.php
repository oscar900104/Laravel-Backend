<?php
namespace Attributes;

use Citmatel\Catalogue\Admin\Attributes\Attribute;
use CompraDeTodo\Seeder;

class AttributesSeeder extends Seeder
{
    /**
     * Tables for prerequisites apply.
     *
     * @var array
     */
    public $tables = [
        'attributes'
    ];

    public function run()
    {
        $this->initPrerequisites();
        //general
        factory(Attribute::class, 'code')->create();
        factory(Attribute::class, 'name')->create();
        factory(Attribute::class, 'published')->create();
        factory(Attribute::class, 'active_range')->create();
        factory(Attribute::class, 'description')->create();
        factory(Attribute::class, 'shipmentService')->create();
        //categories
        //stock
        factory(Attribute::class, 'supplier')->create();
        factory(Attribute::class, 'quantity')->create();
        factory(Attribute::class, 'min_quantity')->create();
        factory(Attribute::class, 'measure_unity')->create();
        factory(Attribute::class, 'weight')->create();
        //images
        factory(Attribute::class, 'image')->create();
        factory(Attribute::class, 'gallery')->create();
        //orders
        factory(Attribute::class, 'service')->create();
        factory(Attribute::class, 'deposit')->create();
        factory(Attribute::class, 'price')->create();

//        //metadata
//        factory(Attribute::class, 'title')->create();
//        factory(Attribute::class, 'meta_description')->create();
//        factory(Attribute::class, 'keywords')->create();



        factory(Attribute::class, 'format')->create();
        factory(Attribute::class, 'typology')->create();
        factory(Attribute::class, 'bookstore_language')->create();
        factory(Attribute::class, 'downloadable')->create();
        factory(Attribute::class, 'brand')->create();
        factory(Attribute::class, 'warranty')->create();
        factory(Attribute::class, 'promotional_status')->create();
        factory(Attribute::class, 'new_order')->create();
        factory(Attribute::class, 'recommendation_order')->create();
        factory(Attribute::class, 'most_sale_order')->create();
        factory(Attribute::class, 'print_link')->create();
        factory(Attribute::class, 'chapter')->create();
        factory(Attribute::class, 'editorials')->create();
        factory(Attribute::class, 'authors')->create();
        factory(Attribute::class, 'min_quantity_in_order')->create();
        factory(Attribute::class, 'max_quantity_in_order')->create();



        $this->resetPrerequisites();
    }
}