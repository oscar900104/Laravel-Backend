<?php

namespace App\Http\Controllers\Admin;

use Citmatel\Hosting\Technologies\TechnologyRepository;
use Citmatel\Support\Http\Controllers\EntityController;
use Illuminate\Http\Request;


class TechnologyController extends EntityController
{

    function __construct(TechnologyRepository $technologyRepository)
    {
        parent::__construct($technologyRepository, 'programming-languages', 'admin/programming-languages',
            'admin.technologies');
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