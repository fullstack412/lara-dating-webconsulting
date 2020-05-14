<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class MembersController extends Controller
{
    function index()
    {
        return view('members');
    }

    function comments()
    {
        return view('comments');
    }

    function likes()
    {
        return view('likes');
    }

    function notifications()
    {
        return view('notifications');
    }
}
