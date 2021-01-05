<?php

namespace App\Auth;


use GuzzleHttp\Client;
use Illuminate\Auth\GenericUser;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Carbon;

class ApiUser extends GenericUser implements Authenticatable, MustVerifyEmail
{
    use Notifiable, \Illuminate\Auth\MustVerifyEmail;

    function getKey()
    {
        return $this->attributes['id'];
    }

    public function markEmailAsVerified()
    {
        $client = app(Client::class);
        $bodyResponse = $client->put('api/users/' . $this->getAuthIdentifier(), [
            'headers' => [
                'Content-Type' => 'application/x-www-form-urlencoded',
            ],
            'form_params' => [
                'email_verified_at' => Carbon::now()->toDateTimeString(),
            ]
        ]);
        $users = json_decode($bodyResponse->getBody())->data;

    }

    public function getAuthIdentifier()
    {
        return $this->attributes['id'];
    }

}