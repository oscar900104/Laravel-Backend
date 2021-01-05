<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Citmatel\Support\Environment\Translator;
use Illuminate\Support\Facades\Input;

class ApiController extends Controller
{
    function __construct(Translator $translator)
    {
        $this->translator = $translator;
    }

    function index()
    {
        $limit = Input::get('limit') ?: 10;
        $items = $this->repository->paginate($limit);
        return fractal($items, new $this->transformer($this->translator))->respond(200, [], JSON_PRETTY_PRINT);
    }

    function show($id)
    {
        $items = $this->repository->where($this->key, $id)->first();
        return fractal($items, new $this->transformer($this->translator))->respond(200, [], JSON_PRETTY_PRINT);
    }

}