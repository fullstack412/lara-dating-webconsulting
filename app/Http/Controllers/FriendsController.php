<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FriendsController extends Controller
{
    function index()
    {
        return view('friends');
    }

    function friendrequest()
    {
        return view('friendrequest');
    }
}
