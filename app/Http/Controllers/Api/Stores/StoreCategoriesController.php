<?php
namespace App\Http\Controllers\Api\Stores;

use App\Http\Controllers\Api\NestedApiController;
use Citmatel\Catalogue\Api\CategoryTransformer;
use Citmatel\Stores\Admin\Repositories\StoresRepository;
use Citmatel\Support\Environment\Translator;

class StoreCategoriesController extends NestedApiController
{
    function __construct(StoresRepository $repository, Translator $translator)
    {
        $this->nested = 'categories';
        $this->nestedKey = 'slug';
        $this->repository = $repository;
        $this->transformer = CategoryTransformer::class;
        parent::__construct($translator);
    }
}