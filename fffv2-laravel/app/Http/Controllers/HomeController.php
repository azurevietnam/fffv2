<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Redirect;

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
    public function change_domain(Request $request)
    {
        if(is_numeric($request->domain_id_choose)) {
            if (Session::has('domain_id_choose')) {
                Session::forget('domain_id_choose');
            }
            Session::put('domain_id_choose', $request->domain_id_choose);
        }
        return Redirect::back();
    }
}
