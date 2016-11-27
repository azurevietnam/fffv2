<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\UserRepository;
use Validator;
use DB;
use Auth;
use Redirect;
use Session;

class ConfigurationController extends Controller
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
        //return view('front.virtualclicks.virtualclicks');
    }


}
