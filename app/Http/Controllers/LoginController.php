<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Auth;

class LoginController extends Controller
{
    function index()
    {
        return view('login');
    }

    function register(Request $request)
    {
        return view('register');
    }

    function checklogin(Request $request)
    {
        $this->validate($request, [
            'email'     =>  'required|email',
            'password'  =>  'required|alphaNum|min:8'
        ]);

        $user_data = array(
            'email'     =>  $request->get('email'),
            'password'  =>  $request->get('password')
        );

        if(Auth::attempt($user_data))
        {
            return route('/');
        }
        else
        {
            return back()->with('error', 'Wrong Login Details');
        }
    }

    function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
