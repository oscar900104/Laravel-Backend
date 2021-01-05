<?php


namespace App\Http\Controllers\Admin;
use Citmatel\Hosting\Pages\PageRepository;

use Citmatel\Support\Http\Controllers\EntityController;
use Illuminate\Http\Request;

class PageController extends EntityController
{

    function __construct(PageRepository $pageRepository)
    {
        parent::__construct($pageRepository, 'page-creator', 'admin/page-creator',
            'admin.page-creator');
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