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
}
