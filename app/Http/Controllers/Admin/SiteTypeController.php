<?php


namespace App\Http\Controllers\Admin;


use Citmatel\Hosting\CommercialPackageRepository;
use Citmatel\Hosting\Technologies\SiteTypeRepository;
use Citmatel\Support\Http\Controllers\EntityController;
use Illuminate\Http\Request;

class SiteTypeController  extends EntityController
{
    function __construct(SiteTypeRepository $siteTypeRepository)
    {
        parent::__construct($siteTypeRepository, 'site-types', 'admin/site-types',
            'admin.site-types');
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