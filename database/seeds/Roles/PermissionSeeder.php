<?php

namespace Roles;


use Citmatel\Catalogue\Admin\Attributes\Group;
use Citmatel\Users\Admin\Roles\Permission;
use Citmatel\Users\Admin\Roles\Role;
use CompraDeTodo\Seeder;
use Illuminate\Support\Facades\Route;

class PermissionSeeder extends Seeder
{
    /**
     * Tables for prerequisites apply.
     * @var array
     */
    public $tables = [
        'permissions',
        'permission_role',
        'roles'
    ];

    public function run()
    {
        $this->initPrerequisites();
        $role = Role::create(['name' => 'Administrador']);
        $routes = Route::getRoutes();

        foreach ($routes as $route) {
            try {
                $this->initPerm($role, $route->getName());
            } catch (\Exception $e) {
                dump('exception');
                dump($route->uri());
                dump($e->getMessage());
            }
        }
        $this->initPerm($role, 'stores.tab.general');
        $this->initPerm($role, 'stores.tab.stores');
        $this->initPerm($role, 'stores.tab.galleries');
        $this->initPerm($role, 'stores.tab.metadata');

        $this->initPerm($role, 'products.tab.general');
        $this->initPerm($role, 'products.tab.categories');
        $this->initPerm($role, 'products.tab.images');
        $this->initPerm($role, 'products.tab.metadata');
        $this->initPerm($role, 'products.tab.prices');
        $this->initPerm($role, 'products.tab.stock');
        $this->initPerm($role, 'products.config.tab.products');
        $this->initPerm($role, 'products.bundles.tab.products');

//        foreach (Group::all() as $group) {
//
//                try {
//                    $this->initPerm($role,'products.tab.'.$group->name);
//                } catch (\Exception $e) {
//                    dump('exception');
//                    dump($route->uri());
//                    dump($e->getMessage());
//                }
//
//        }

        $this->resetPrerequisites();
    }

    function initPerm($role, $name)
    {
        $permission = new Permission();
        $permission->name = $name;
        $permission->save();
        $role->perms()->attach($permission->id);
        $role->save();
        return $permission;
    }
}