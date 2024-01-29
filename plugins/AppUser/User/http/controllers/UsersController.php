<?php namespace AppUser\User\Http\Controllers;


use AppUser\User\Http\Resources\UserResource;
use AppUser\User\Models\User;
use AppUser\User\Controllers\Users;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::all();
        return UserResource::collection($users);
        
    }
    public function register()
    {
        

        $User = new User();
        $User->username = post('username');
        $User->password = Hash::make(post('password'));
        $User->token = post('token'); 
        $User->save();
        
    }

    public function show($id)
    {
        $user = User::findOrFail($id);
        return UserResource::make($user);
    }
}