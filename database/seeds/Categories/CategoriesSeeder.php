<?php

namespace Categories;


use Citmatel\Catalogue\Admin\Categories\Category;
use CompraDeTodo\Seeder;

class CategoriesSeeder extends Seeder
{

    public $tables = [
        'categories'
    ];

    /**
     *
     */
    public function run()
    {
        $this->initPrerequisites();

        Category::create([
            'name' => '[:es]Sistema Administre su Negocio[:]',
            'description' => '[:es]Sistema Administre su Negocio[:]',
            'order'=>1,
                          'slug' => 'sistema-administre-su-negocio', 'active' => 1]);
        Category::create([
        'name' => '[:es]Sistema de Contabilidad para Negocios Propios[:]',
        'description' => '[:es]Sistema de Contabilidad para Negocios Propios[:]',
        'order'=>1,
        'slug' => 'sistema-contabilidad-negocios-propios-cuadre', 'active' => 1]);

        Category::create([
            'name'   => '[:es]Pago de Servicios a Citmatel[:]',
            'description'   => '[:es]Pago de Servicios para Clientes de Citmatel[:]',
            'slug'   => 'pago-servicios-citmatel',
            'order'=>1,
            'active' => 1
        ]);
        $bookstoreCategories = [
            ['es'=>'Gran Comercial','en'=>'','fr'=>'','pr'=>''],
            ['es'=>'Productos de Belleza','en'=>'','fr'=>'','pr'=>''],
            ['es'=>'Tejidos y Ajuares','en'=>'','fr'=>'','pr'=>''],
            ['es'=>'Servilletas','en'=>'','fr'=>'','pr'=>''],
            ['es'=>'Uniformes y Ajuares','en'=>'','fr'=>'','pr'=>''],
            ['es'=>'Vidrio','en'=>'','fr'=>'','pr'=>''],
            ['es'=>'Ajuares','en'=>'','fr'=>'','pr'=>''],
            ['es'=>'Cinta Adhesiva','en'=>'','fr'=>'','pr'=>''],
            ['es'=>'Faciales','en'=>'','fr'=>'','pr'=>''],
            ['es'=>'Insumos Gastronómicos','en'=>'','fr'=>'','pr'=>''],
            ['es'=>'Servilleta y Papel','en'=>'','fr'=>'','pr'=>''],
            ['es'=>'Uniformes','en'=>'','fr'=>'','pr'=>''],
            ['es'=>'Varios','en'=>'','fr'=>'','pr'=>''],
            ['es'=>'Productos de higiene','en'=>'','fr'=>'','pr'=>''],
            ['es'=>'Lencerías','en'=>'','fr'=>'','pr'=>''],
            ['es'=>'Talabartería','en'=>'','fr'=>'','pr'=>''],
        ];
        foreach ($bookstoreCategories as $category) {

            Category::create([
                'name'   => '[:es]' . $category['es'] . '[:en]' . $category['en'] . '[:fr]' . $category['fr'] . '[:pr]' . $category['pr'] . '[:]',
                'description'   => '[:es]' . $category['es'] . '[:en]' . $category['en'] . '[:fr]' . $category['fr'] . '[:pr]' . $category['pr'] . '[:]',
                'slug'   => str_slug($category['es']),
                'order'=>1,
                'active' => 1
            ]);

        }


        $this->resetPrerequisites();
    }
}