<?php
namespace App\Http\Controllers\Api\Catalogue\Products;

use App\Http\Controllers\Api\ApiController;
use Citmatel\Catalogue\Admin\Repositories\ProductsRepository;
use Citmatel\Catalogue\Api\Products\ProductTransformer;
use Citmatel\Support\Environment\Translator;

class ProductController extends ApiController
{
    function __construct(ProductsRepository $repository, Translator $translator)
    {
        $this->key = 'id';
        $this->repository = $repository;
        $this->transformer = ProductTransformer::class;
        parent::__construct($translator);
    }
}