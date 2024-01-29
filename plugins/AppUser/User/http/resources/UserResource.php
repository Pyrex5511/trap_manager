<?php namespace AppUser\User\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;
use Illuminate\Support\Carbon;
class UserResource extends Resource
{
    public function toArray($request)
    {
        //dd(Carbon::make($this->time)->subMonth()->format('d.m.Y H:i'));
        return [
            'id' => $this->id,
            'username' => $this->username,
            'password' => $this->password,
            'token' => $this->token,
        ];
    }
}