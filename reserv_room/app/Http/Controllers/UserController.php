<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class UserController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $active = DB::table('rooms')->where('room_status','available')->get();
        $inactive = DB::table('rooms')->where('room_status','unavailable')->get();
        return view('user/rooms')->with('active',$active)->with('inactive',$inactive);
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
