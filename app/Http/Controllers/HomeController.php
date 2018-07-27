<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $login_content =view('auth.login');
        $register_content=view('auth.register');
        return view('master')
                ->with('content',$login_content)
                ->with('content',$register_content);
        //return view('master');
    }
}
