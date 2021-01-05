<?php
namespace Attributes;

use Citmatel\Catalogue\Admin\Attributes\Group;
use CompraDeTodo\Seeder;

class AttributeGroupSeeder extends Seeder
{
    /**
     * Tables for prerequisites apply.
     *
     * @var array
     */
    public $tables = [
        'groups'
    ];

    public function run()
    {
        $this->initPrerequisites();
        factory(Group::class, 'general')->create();
        factory(Group::class, 'stock')->create();
        factory(Group::class, 'images')->create();
        factory(Group::class, 'order')->create();
        factory(Group::class, 'metadata')->create();
        factory(Group::class, 'bookstore')->create();
        factory(Group::class, 'promotional')->create();
        factory(Group::class, 'warranties')->create();
        factory(Group::class, 'brands')->create();
        factory(Group::class, 'downloadables')->create();
        factory(Group::class, 'print_on_demand')->create();
        factory(Group::class, 'logistic')->create();
        $this->resetPrerequisites();
    }
}