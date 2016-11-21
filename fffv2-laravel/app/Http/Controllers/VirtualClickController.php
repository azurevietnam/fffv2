<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\UserRepository;
use DB;


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

    public function ip_click_ao(Request $request, UserRepository $userRepository){
        $date = date('Y-m-d');
        $user = $request->user();
        $domains = DB::table("domains")
            ->where('uid', '=', $user->id)
            ->where('status', '=', 1)
            ->where('expired_date', '>=', $date)
            ->get();

        //print_r($domains);die;

        return view('front.virtualclicks.ip-click-ao');
    }

    public function ip_khu_vuc(){
        return view('front.virtualclicks.ip-khu-vuc');
    }
    public function ip_thiet_bi(){
        return view('front.virtualclicks.ip-thiet-bi');
    }

}
