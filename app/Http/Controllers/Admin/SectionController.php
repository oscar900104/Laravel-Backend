<?php


namespace App\Http\Controllers\Admin;



use Citmatel\Hosting\Sections\SectionsRepository;
use Citmatel\Support\Http\Controllers\EntityController;
use Illuminate\Http\Request;

class SectionController extends EntityController
{
    function __construct(SectionsRepository $sectionsRepository)
    {
        parent::__construct($sectionsRepository, 'sections', 'admin/sections',
            'admin.sections');
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