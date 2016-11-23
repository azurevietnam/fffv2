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
            $domain->tracking_url = 'http://tracking.fff.com.vn?keycode=' . $domain->keycode . '&lpurl={lpurl}';
            return view('front.configuration.cauhinh-chanclicktac')
                ->with('domain',$domain);
        } else {
            session()->flash('message', 'Không tìm thấy domain');
            return redirect('error-message');
        }
    }

    public function post_cauhinh_chanclicktac(Request $request) {
        if($request->has('deny_ip')) {
            $domain = DB::table("domains")
                ->where('id', '=', $request->domain_id)
                ->update(['deny_ip' => $request->deny_ip]);
            return Redirect::back()->with('ok','Đã chặn thành công các IP đã yêu cầu!');
        } else {
            $input = $request->all();
            $rules = [
                'tracking_url' => 'required',
                'tracking' => 'required',
            ];
            $messages = [
                'tracking_url.required' => 'Vui lòng điền Tracking URL.',
                'tracking.required' => 'Vui lòng điền Mã theo dõi.',
            ];

            $validator = Validator::make($input, $rules, $messages);
            if ($validator->fails()) {
                return back()->withInput()->withErrors($validator);
            } else {
                $dataIns = array(
                    'adword_account' => $request->adword_account,
                    'adword_u' => $request->adword_u,
                    'adword_c' => $request->adword_c,
                    'config_click' => $request->config_click,
                    'config_time' => $request->config_time,
                    'config_viewpage' => $request->config_viewpage,
                    'viettel' => $request->viettel ? 1 : 0,
                    'mobiphone' => $request->mobiphone ? 1 : 0,
                    'vinaphone' => $request->vinaphone ? 1 : 0,
                    'device_pc' => $request->device_pc ? 1 : 0,
                    'device_tablet' => $request->device_tablet ? 1 : 0,
                    'device_phone' => $request->device_phone ? 1 : 0,
                    'updated' => date('Y-m-d H:i:s', time())
                );
                DB::table("domains")
                    ->where('id', $request->domain_id)
                    ->update($dataIns);

                return Redirect::back()->with('ok','Đã cập nhật thành công!');
            }
        }
    }
}
