<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {

        return view('user/rooms');
    }
    public function myroom()
    {
        return view('user/myroom');
    }
    public function usermanagement()
    {
        return view('user/usermanagement');
    }
}
