<?php

namespace App\Http\Controllers\Auth;

use Citmatel\Support\Http\Controllers\Controller;

use Citmatel\Stores\Stores\StoreConfig;
use Citmatel\Users\Admin\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

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
//        $this->redirectTo = $this->redirectTo();
//
//        view()->share('webStore', $this->storeConfig->webStore);
//        view()->share('webStores', $this->storeConfig->webStores);
//        view()->share('webStorePages', $this->storeConfig->webStorePages);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array $data
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => md5($data['password']),
        ]);
    }

    function redirectTo()
    {
        return Lang::get('routes.email') . '/' . Lang::get('routes.verify');
    }
}