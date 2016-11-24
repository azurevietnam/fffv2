<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Redirect;
use Validator;
use DB;

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
    public function add_domain(Request $request)
    {
        $input = $request->all();
        $rules = [
            'domain' => 'required',
        ];
        $messages = [
            'domain.required' => 'Vui lòng điền domain muốn thêm.',
        ];

        $validator = Validator::make($input, $rules, $messages);
        if ($validator->fails()) {
            return back()->withInput()->withErrors($validator)->with('display_add_domain', "yes");
        } else {
            $website  = trim(addslashes($request->input('domain', '')));
            if (strpos($website,"ttp://") > 0) $website = str_ireplace('www.', '', parse_url($website, PHP_URL_HOST));

            if (strpos($website, '.') === FALSE) {
                $validator->getMessageBag()->add('domain', "Website không hợp lệ.Ví dụ: http://vnexpress.net, www.vnexpress.net, vnexpress.net, ... ");
                return back()->withInput()->withErrors($validator)->with('display_add_domain', "yes");
            }

            $domain = $domains = DB::table("domains")->where('domain', $website)->first();
            if(empty($domain)) {
                $keycode = str_random(13);
                $tracking  = $this->trackingIP($website, $keycode, $request->user()->id);

                $dataIns = array(
                    'uid'       => $request->user()->id,
                    'domain'    => $website,
                    'keycode'   =>  $keycode,
                    'tracking'  => $tracking,
                    'created'   => date( 'Y-m-d H:i:s', time())

                );
                $id = DB::table('domains')->insertGetId($dataIns);
                if($id > 0) {
                    if (Session::has('domain_id_choose')) {
                        Session::forget('domain_id_choose');
                    }
                    Session::put('domain_id_choose', $id);

                    return redirect('/config/cauhinh-chanclicktac')->with('ok', "Đã thêm Website thành công. Hãy tiến hành cài đặt");
                } else {
                    $validator->getMessageBag()->add('domain', "Thêm website thất bại. Vui lòng mở lại trình duyệt thử lại");
                    return back()->withInput()->withErrors($validator)->with('display_add_domain', "yes");
                }
            } else {
                $validator->getMessageBag()->add('domain', "Website này bạn đã thêm vào. Thử thêm vào website khác");
                return back()->withInput()->withErrors($validator)->with('display_add_domain', "yes");
            }
        }
    }

    function trackingIP($domain = '', $keycode = '', $uid = 0){
        if($domain == ''|| $keycode == '' || $uid == 0){
            return '';
        }


        $trackingdomain = 'admin.fff.com.vn';
        $tracking  = "<script type='text/javascript'>
            var _cgk = '$keycode'; 
            var _cgd = '$domain';

            (function () {
                var cg = document.createElement('script'); cg.type = 'text/javascript'; cg.async = true;
                cg.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + '$trackingdomain/aui.js';
                var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(cg, s);
            })();

            </script>";
        return $tracking;
    }
}
