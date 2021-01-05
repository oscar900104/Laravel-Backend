<?php
namespace App\Http\Controllers\Api\Stores;

use App\Http\Controllers\Api\ApiController;
use Citmatel\Stores\Admin\Repositories\StoresRepository;
use Citmatel\Stores\Api\PageTransformer;
use Citmatel\Stores\Api\StoreTransformer;
use Citmatel\Support\Environment\Translator;
use Illuminate\Support\Facades\Input;

class StoreController extends ApiController
{
    function __construct(StoresRepository $repository, Translator $translator)
    {
        $this->key='id';
        $this->repository = $repository;
        $this->transformer = StoreTransformer::class;
        parent::__construct($translator);
    }
}