<?php
namespace App\Http\Controllers\Api\Stores;

use App\Http\Controllers\Api\NestedApiController;
use Citmatel\Catalogue\Api\CategoryTransformer;
use Citmatel\Catalogue\Api\Products\ProductTransformer;
use Citmatel\Stores\Admin\Repositories\StoresRepository;
use Citmatel\Support\Environment\Translator;

class StoreProductsController extends NestedApiController
{
    function __construct(StoresRepository $repository, Translator $translator)
    {
        $this->nested = 'products';
        $this->nestedKey = 'slug';
        $this->repository = $repository;
        $this->transformer = ProductTransformer::class;
        parent::__construct($translator);
    }
}