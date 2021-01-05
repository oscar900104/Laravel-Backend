<?php

namespace App\Http\Controllers\Auth;

use Citmatel\Support\Http\Controllers\Controller;

use Citmatel\Stores\Admin\Store;
use Citmatel\Stores\Stores\StoreConfig;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Http\Request;

class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    /**
     * Where to redirect users after resetting their password.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
//        $this->storeConfig = new StoreConfig(6);
//        view()->share('storeConfig', $this->storeConfig);
//
//        view()->share('webStore', $this->storeConfig->webStore);
//        view()->share('webStores', $this->storeConfig->webStores);
//        view()->share('webStorePages', $this->storeConfig->webStorePages);
    }

    public function showResetForm(Request $request,$password,$reset, $token = null)
    {
        return view('auth.passwords.reset')->with(
            ['token' => $token, 'email' => $request->email]
        );
    }
}
