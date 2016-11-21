<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Events\UserAccess;
use Auth;
use DB;
use View;

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
        $domains = array();
        if(Auth::check()) {
            $user = Auth::user();
            $domains = DB::table("domains")
                ->where('uid', '=', $user->id)
                ->where('status', '=', 1)
                ->where('expired_date', '>=', $date)
                ->get();
        }
        View::share('domains', $domains);

        event(new UserAccess);
        return $next($request);
    }
}
