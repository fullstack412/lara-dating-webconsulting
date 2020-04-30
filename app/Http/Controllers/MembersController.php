<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class MembersController extends Controller
{
    function index()
    {
        if (Auth::check()) {
            return view('members');
        } else {
            return route('login');
        }
    }
}
