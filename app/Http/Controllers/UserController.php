<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
<<<<<<< HEAD
    function login(Request $req)
=======
    function login(request $req)
>>>>>>> 2f5f4fed041eb79be46b84c01fd8cce99c5fbfe5
    {
        $user= User::where(['email'=>$req->email])->first();
        if(!$user || !Hash::check($req->password,$user->password))
        {
            return "Username or Password is invalid";
        }
        else{
            $req->session()->put('user', $user);
            return redirect('/');
        }
    }
<<<<<<< HEAD
    function register(Request $req)
    {
        $user= new User;
        $user->name=$req->name;
        $user->email=$req->email;
        $user->password=Hash::make($req->password);
        $user->save();
        return redirect("/login");
    }
=======
>>>>>>> 2f5f4fed041eb79be46b84c01fd8cce99c5fbfe5
}
