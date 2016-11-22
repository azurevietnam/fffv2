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

    public function get_cauhinh_chanclicktac()
    {
        $domain = DB::table("domains")
            ->where('id', '=', Session::get('domain_id_choose'))
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
        //$ads_viewpage = DB::table("ads_viewpage")
        //    ->where('status', '=', 1)
        //    ->orderBy('value', 'asc')
        //    ->get();
        return view('front.configuration.cauhinh-chanclicktac')
            ->with('domain',$domain)
            ->with('rule',$rule);
    }

    public function post_cauhinh_chanclicktac(Request $request) {
        if($request->has('special_block')) {
            $domain = DB::table("domains")
                ->where('id', '=', $request->domain_id)
                ->update(['special_block' => $request->special_block]);
            return Redirect::back()->with('ok','Đã chặn thành công các IP đã yêu cầu!');
        } else {
            $input = $request->all();
            $rules = [
                'tracking_url' => 'required',
                'tracking_code' => 'required',
            ];
            $messages = [
                'tracking_url.required' => 'Vui lòng điền Tracking URL.',
                'tracking_code.required' => 'Vui lòng điền Mã theo dõi.',
            ];

            $validator = Validator::make($input, $rules, $messages);
            if ($validator->fails()) {
                return back()->withInput()->withErrors($validator);
            } else {
                $dataIns = array(
                    //'domain_code' => $request->domain_code,
                    //'tracking_code' => $request->tracking_code,
                    'domain_id' => $request->domain_id,
                    'config_click' => $request->config_click,
                    'config_time' => $request->config_time,
                    'config_viewpage' => $request->config_viewpage,
                    'net_viettel' => $request->net_viettel ? 1 : 0,
                    'net_mobifone' => $request->net_mobifone ? 1 : 0,
                    'net_vinaphone' => $request->net_vinaphone ? 1 : 0,
                    'device_pc' => $request->device_pc ? 1 : 0,
                    'device_tablet' => $request->device_tablet ? 1 : 0,
                    'device_phone' => $request->device_phone ? 1 : 0,
                    'created' => date('Y-m-d H:i:s', time())
                );
                $rule = DB::table("rule_block_ads")
                    ->where('domain_id', $request->domain_id)
                    ->first();
                if($rule) {
                    DB::table("rule_block_ads")
                        ->where('domain_id', $request->domain_id)
                        ->update($dataIns);
                } else {
                    DB::table("rule_block_ads")->insert($dataIns);
                }

                return Redirect::back()->with('ok','Đã cập nhật thành công!');
            }
        }
    }
}
