<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Events\UserAccess;
use Auth;
use DB;
use View;
use Session;

class App
{
    /**
     * Handle an incoming request.
     *
     * @param  Illuminate\Http\Request  $request
     * @param  Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $date = date('Y-m-d');
        $domains = null;
        $current_domain = null;
        $pay_package = null;
        if(Auth::check()) {
            $user = Auth::user();
            $pay_package =  DB::table("pay_package")
                ->where('id', '=', $user->package_id)
                ->first();

            $domains = DB::table("domains")
                ->where('uid', '=', $user->id)
                //->where('status', '=', 1)
                //->where('hethan', '>=', $date)
                ->orderBy('id', 'asc')
                ->get();

            if(!empty($domains) && count($domains) > 0) {
                if (!Session::has('domain_id_choose')) {
                    Session::put('domain_id_choose', $domains->first()->id);
                }
                if (Session::has('domain_id_choose')) {
                    $current_domain = $domains->where('id', Session::get('domain_id_choose'))->first();
                }
            }
        } else {
            if (Session::has('domain_id_choose')) {
                Session::forget('domain_id_choose');
            }
        }
        View::share(['domains' => $domains,  'current_domain' => $current_domain, 'pay_package' => $pay_package]);

        event(new UserAccess);
        return $next($request);
    }
}
