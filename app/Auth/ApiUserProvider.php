<?php
namespace App\Auth;

use GuzzleHttp\Client;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Contracts\Auth\UserProvider;
use SoapClient;

class ApiUserProvider implements UserProvider
{

    function __construct(Client $client)
    {
        $this->client = $client;
    }

    /**
     * Retrieve a user by the given credentials.
     * @param  array $credentials
     * @return \Illuminate\Contracts\Auth\Authenticatable|null
     */
    public function retrieveByCredentials(array $credentials)
    {
        $user = $this->getUserByUsername($credentials['email']);
        return $this->getApiUser($user);
    }

    protected function getUserByUsername($username)
    {
        $user = [];

        foreach ($this->getUsers() as $item) {

            if ($item['email'] == $username) {
                $user = $item;

                break;
            }
        }

        return $user ?: null;
    }

    /**
     * Get the use details from your API.
     * @param  string $username
     * @return array|null
     */
    protected function getUsers()
    {
//        $client = new Client(['base_uri' => 'https://www.superfacil.cu/', 'verify' => false]);
        $bodyResponse = $this->client->get('api/users');

        $users = json_decode($bodyResponse->getBody())->data;
        ini_set("soap.wsdl_cache_enabled", false);
        $url = "https://mall_feria.cuba.cu/ws/ws.wsdl";
        $context = stream_context_create(array(
            'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            )
        ));
        $service = new SoapClient($url, array('stream_context' => $context));
        $wsMallKeyAccess = '9930F646CE29A2BD7A94D3D6E9220335F340472E';
        $result = $service->users('9930F646CE29A2BD7A94D3D6E9220335F340472E');

        return $result;
    }

    /**
     * Get the api user.
     * @param  mixed $user
     * @return \App\Auth\ApiUser|null
     */
    protected function getApiUser($user)
    {
        if ($user !== null) {
            return new ApiUser((array)$user);
        }
    }

    /**
     * Retrieve a user by their unique identifier.
     * @param  mixed $identifier
     * @return \Illuminate\Contracts\Auth\Authenticatable|null
     */
    public function retrieveById($identifier)
    {
        $user = $this->getUserById($identifier);

        return $this->getApiUser($user);
    }

    protected function getUserById($id)
    {
        $user = [];

        foreach ($this->getUsers() as $item) {
            if ($item['id'] == $id) {
                $user = $item;

                break;
            }
        }

        return $user ?: null;
    }

    /**
     * Validate a user against the given credentials.
     * @param  \Illuminate\Contracts\Auth\Authenticatable $user
     * @param  array $credentials
     * @return bool
     */
    public function validateCredentials(Authenticatable $user, array $credentials)
    {
        $plain = $credentials['password']; // will depend on the name of the input on the login form
        $hashedValue = $user->getAuthPassword();
        return md5($plain) == $hashedValue;
        //  return Hash::check($bcrypt, $user->getAuthPassword());
    }

    // The methods below need to be defined because of the Authenticatable contract
    // but need no implementation for 'Auth::attempt' to work and can be implemented
    // if you need their functionality

    public function retrieveByToken($identifier, $token)
    {
    }

    /**
     * Update the "remember me" token for the given user in storage.
     * @param  \Illuminate\Contracts\Auth\Authenticatable $user
     * @param  string $token
     * @return void
     */
    public function updateRememberToken(Authenticatable $user, $token)
    {
        // TODO: Implement updateRememberToken() method.
    }
}