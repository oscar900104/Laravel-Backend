<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Api\ApiController;
use Citmatel\Support\Environment\Translator;
use Citmatel\Users\Admin\Repositories\UserRepository;
use Citmatel\Users\Api\UserTransformer;
use Symfony\Component\HttpFoundation\Request;

class AuthController extends ApiController
{
    function __construct(UserRepository $repository, Translator $translator)
    {
        $this->key = 'id';
        $this->repository = $repository;
        $this->transformer = UserTransformer::class;
        $this->translator=$translator;

    }

    function update($userId, Request $request)
    {
        $user = $this->repository->find($userId);
        foreach ($request->all() as $key => $value) {
            $user->$key = $value;
        }
        $user->save();
        return fractal($user, new $this->transformer)->respond(200, [], JSON_PRETTY_PRINT);
    }

}