<?php


namespace App\Http\Controllers\Admin;


use Citmatel\Hosting\Technologies\DataBaseTypeRepository;
use Citmatel\Support\Http\Controllers\EntityController;
use Illuminate\Http\Request;


class DataBaseTypeController extends EntityController
{

    function __construct(DataBaseTypeRepository $dataBaseRepository)
    {
        parent::__construct($dataBaseRepository, 'data-base-types', 'admin/data-base-types',
            'admin.data-base-types');
    }

    public function store(Request $request)
    {
        return parent::genericStore($request);
    }

    public function update(Request $request, $id)
    {
        return parent::genericUpdate($request, $id);
    }

}