<?php

namespace App\Http\Controllers\Auth;

use Citmatel\Support\Http\Controllers\Controller;

use Citmatel\Stores\Admin\Store;
use Citmatel\Stores\Stores\StoreConfig;
use Illuminate\Foundation\Auth\VerifiesEmails;
use Illuminate\Http\Request;

class VerificationController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Email Verification Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling email verification for any
    | user that recently registered with the application. Emails may also
    | be resent if the user did not receive the original email message.
    |
    */
    use VerifiesEmails;

    /**
     * Where to redirect users after verification.
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('signed')->only('verify');
        $this->middleware('throttle:6,1')->only('verify', 'resend');
//        $this->storeConfig = new StoreConfig(6);
//        view()->share('storeConfig', $this->storeConfig);
//
//        view()->share('webStore', $this->storeConfig->webStore);
//        view()->share('webStores', $this->storeConfig->webStores);
//        view()->share('webStorePages', $this->storeConfig->webStorePages);
    }
}
