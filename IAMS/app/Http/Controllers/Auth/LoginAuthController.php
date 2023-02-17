<?php

namespace App\Http\Controllers\Auth;
use Auth;
use App\Http\Controllers\Controller;
use App\Http\Request\Auth\Loginrequest;
use Illuminate\Http\Request;

class LoginAuthController extends Controller
{
    public function login(Request $request)
    {

    this->validate( $request, [
        'email'=>'required',
        'password'=>'required',
    ]);
    if([
        'email'=>$request->email,
        password=>$request->password,
    ]){
        $user=auth()->user();
        return('welcome');}
        else{
            return('Invalid login credential');
        }
        }
    }



