<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        //$this->middleware('admin');
    }
    /**
     * Display the home page.
     *
     * @return \Illuminate\Http\Response
     */
    public function __invoke()
    {
        return view('front.index');
    }

    public function error()
    {
        //session()->keep(['message']);
        return view('errors.error', ['message' =>  session()->get('message')]);
    }
}
