<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    function index()
    {
        return view('myprofile');
    }

    function chats()
    {
        return view('chats');
    }

    function messages()
    {
        return view('messages');
    }

    function spam()
    {
        return view('spam');
    }

    function universal()
    {
        return view('universal');
    }

    function myphotos()
    {
        return view('myphotos');
    }

    function myaccount()
    {
        return view('myaccount');
    }

    function upgrade()
    {
        return view('upgrade');
    }
}
