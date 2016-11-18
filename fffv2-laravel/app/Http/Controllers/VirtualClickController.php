<?php

namespace App\Http\Controllers;

class VirtualClickController extends Controller
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

    public function ip_click_ao(){
        return view('front.virtualclicks.ip-click-ao');
    }

    public function ip_khu_vuc(){
        return view('front.virtualclicks.ip-khu-vuc');
    }
    public function ip_thiet_bi(){
        return view('front.virtualclicks.ip-thiet-bi');
    }

}
