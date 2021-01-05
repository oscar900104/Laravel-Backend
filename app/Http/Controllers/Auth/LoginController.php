<?php

namespace App\Http\Controllers\Auth;

use Citmatel\Stores\Admin\Store;
use Citmatel\Stores\Stores\StoreConfig;
use Citmatel\Support\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\URL;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    protected $redirectTo = '/';

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
//        $this->storeConfig = new StoreConfig(6);
//        view()->share('storeConfig', $this->storeConfig);
//
//        view()->share('webStore', $this->storeConfig->webStore);
//        view()->share('webStores', $this->storeConfig->webStores);
//        view()->share('webStorePages', $this->storeConfig->webStorePages);
    }

    public function showLoginForm()
    {
        return view('auth.login');
    }

    function redirectTo()
    {
        if (session()->has('url.intended')) {
            return session('url.intended');
        }
        return property_exists($this, 'redirectTo') ? $this->redirectTo : '/home';
    }

    public function logout(Request $request)
    {
        $this->guard()->logout();
        $request->session()->invalidate();
        return $this->loggedOut($request) ?: redirect($this->redirectTo());
    }


    public  function logoutok(){

        Auth::logout();
        return redirect('/');
    }
}