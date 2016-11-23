<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\UserRepository;
use Validator;
use DB;
use Auth;
use Redirect;
use Session;


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

    public function ip_click_ao(Request $request)
    {
        $num_row = $request->get("num_row", 50);
        $search_text = $request->get("search_text", '');
        $num_page = $request->get("num_page", 1);
        $max_page = 10;

        $skip = ($num_page - 1) * $num_row;
        $domain_logs = DB::table("domain_logs")
            ->skip($skip)
            ->take($num_row)
            ->get();

        return view('front.virtualclicks.ip-click-ao')
            ->with(compact('num_row'))
            ->with(compact('search_text'))
            ->with(compact('num_page'))
            ->with(compact('max_page'))
            ->with(compact('domain_logs'))
            ;
    }


    public function ip_khu_vuc(){
        return view('front.virtualclicks.ip-khu-vuc');
    }
    public function ip_thiet_bi(){
        return view('front.virtualclicks.ip-thiet-bi');
    }

}
