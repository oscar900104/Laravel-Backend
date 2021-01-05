<?php

namespace App\Http\Controllers\Auth;

use Citmatel\Support\Http\Controllers\Controller;

use Citmatel\Stores\Stores\StoreConfig;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;

class ForgotPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */

    use SendsPasswordResetEmails;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
        $this->storeConfig = new StoreConfig(6);
//        view()->share('storeConfig', $this->storeConfig);
//
//        view()->share('webStore', $this->storeConfig->webStore);
//        view()->share('webStores', $this->storeConfig->webStores);
//        view()->share('webStorePages', $this->storeConfig->webStorePages);
    }
}
