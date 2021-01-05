<?php
/**
 * Created by PhpStorm.
 * User: USUARIO
 * Date: 11/25/2018
 * Time: 11:34 AM
 */

namespace App\Http\Middleware;


use Citmatel\Users\Admin\Accesses\Access;
use Citmatel\Users\Admin\Repositories\AccessesRepository;
use Citmatel\Users\Admin\User;
use Closure;
use Illuminate\Support\Facades\Auth;

class UserAccess
{
    function __construct(AccessesRepository $accessesRepository)
    {
        $this->repository = $accessesRepository;
    }

    public function handle($request, Closure $next, $guard = null)
    {
        $data = [];
        $data['client_ip'] = $request->ip();
        $data['server_ip'] = $request->ip();
        $data['url'] = $request->url();
        if (Auth::user() != null) {
            $data['email'] = Auth::user()->email;
        }
        $this->repository->createAndStore($data);
        return $next($request);
    }
}