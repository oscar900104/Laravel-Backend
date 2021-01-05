<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Citmatel\Support\Environment\Translator;

class NestedApiController extends Controller
{
    function __construct(Translator $translator)
    {
        $this->translator = $translator;
    }

    function index($entityId)
    {
        $nested = $this->nested;
        $related = $this->repository->find($entityId);
        $entity = $related->{$nested};
        return fractal($entity, new $this->transformer($this->translator))->respond(200, [], JSON_PRETTY_PRINT);
    }

    function show($entityId, $id)
    {
        $nested = $this->nested;
        $related = $this->repository->find($entityId);
        $entity = $related->{$nested}->firstWhere($this->nestedKey, $id);
        return fractal($entity, new $this->transformer($this->translator))->respond(200, [], JSON_PRETTY_PRINT);
    }
}