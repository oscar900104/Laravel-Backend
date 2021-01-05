<?php
namespace App\Http\Controllers\Api\Stores;

use App\Http\Controllers\Api\NestedApiController;
use Citmatel\Stores\Admin\Repositories\StoresRepository;
use Citmatel\Stores\Api\PageTransformer;
use Citmatel\Support\Environment\Translator;

class StorePageController extends NestedApiController
{
    function __construct(StoresRepository $repository, Translator $translator)
    {
        $this->nested = 'pages';
        $this->nestedKey = 'slug';
        $this->repository = $repository;
        $this->transformer = PageTransformer::class;
        parent::__construct($translator);
    }
}