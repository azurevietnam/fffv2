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
        $row = $request->get("row", 50);
        $search_ip = $request->get("search_ip", '');
        $page = $request->get("page", 1);
        $sfield = $request->get("sfield", "");
        $sdir = $request->get("sdir", "");

        $domain = DB::table("domains")
            ->where('id', '=', Session::get('domain_id_choose'))
            ->first();
        $query = DB::table("domain_logs")
            ->where("domain_key", $domain->keycode);
        if(!empty($search_ip)) {
           $query->where('ip', 'like', "%" . $search_ip . "%");
        }
        $domain_logs = $query->paginate($row);
        $domain_logs->appends(["row" => $row, "search_ip" => $search_ip, "sfield" => $sfield, "sdir" => $sdir])->links();

        return view('front.virtualclicks.ip-click-ao')
            ->with(compact('row'))
            ->with(compact('search_ip'))
            ->with(compact('page'))
            ->with(compact('sfield'))
            ->with(compact('sdir'))
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
