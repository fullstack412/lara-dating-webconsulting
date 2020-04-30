<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index()
    {
        return view('home');
    }

    function privacy()
    {
        return view('privacy');
    }

    function contact()
    {
        return view('contact');
    }

    function terms()
    {
        return view('terms');
    }

    function usersguide()
    {
        return view('usersguide');
    }
}
