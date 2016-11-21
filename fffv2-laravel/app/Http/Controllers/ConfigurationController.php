<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\UserRepository;
use DB;


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

    public function cauhinh_chanclicktac(Request $request)
    {
        $domain_name = 'fff.com.vn';
        $user = $request->user();
        $domain = DB::table("domains")
            ->where('uid', '=', $user->id)
            ->where('domain_name', '=', $domain_name)
            ->first();
        if(!empty($domain)){
            $domain->tracking_url = 'http://tracking.fff.com.vn?keycode=' . $domain->domain_key . '&lpurl={lpurl}';
        } else {
            session()->flash('message', 'Không tìm thấy domain');
            return redirect('error-message');
        }
        $rule = DB::table("rule_block_ads")
            ->where('domain_id', '=', $domain->id)
            ->first();
        $ads_viewpage = DB::table("ads_viewpage")
            ->where('status', '=', 1)
            ->orderBy('value', 'asc')
            ->get();
        return view('front.configuration.cauhinh-chanclicktac')
            ->with('domain',$domain)
            ->with('rule',$rule)
            ->with('ads_viewpage',$ads_viewpage)
            ;
    }
}
