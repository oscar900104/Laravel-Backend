<?php

namespace App\Http\Controllers\Admin;

use Citmatel\Hosting\CommercialPackageRepository;
use Citmatel\Support\Http\Controllers\EntityController;
use Illuminate\Http\Request;

class CommercialPackageController extends EntityController
{

    function __construct(CommercialPackageRepository $commercialPackageRepository)
    {
        parent::__construct($commercialPackageRepository, 'commercial-packages', 'admin/commercial-packages',
            'admin.commercial-packages');
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