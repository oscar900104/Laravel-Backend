<?php
namespace App\Http\Controllers\Api\Catalogue;

use App\Http\Controllers\Api\ApiController;
use Citmatel\Catalogue\Admin\Repositories\CategoriesRepository;
use Citmatel\Catalogue\Api\CategoryTransformer;
use Citmatel\Support\Environment\Translator;

class CategoryController extends ApiController
{
    function __construct(CategoriesRepository $repository,Translator $translator)
    {
        $this->key = 'slug';
        $this->repository = $repository;
        $this->transformer = CategoryTransformer::class;
        parent::__construct($translator);
    }
}