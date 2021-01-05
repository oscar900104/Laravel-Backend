<?php

namespace App\Http\Middleware;


use Closure;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Http\Request;

class Permission
{
    const DELIMITER = '|';

    protected $auth;

    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
    }

    public function handle(Request $request, Closure $next)
    {
        $permission = $request->route()->getName();
        if ($this->auth->guest() || !$request->user()->can($permission)) {
            abort(403);
        }
        return $next($request);
    }
}