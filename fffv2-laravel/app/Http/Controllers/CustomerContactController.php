<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\UserRepository;
use Validator;
use DB;
use Auth;
use Redirect;
use Session;
use cURL;


class CustomerContactController extends Controller
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

    public function thuthapthongtin_baocao(Request $request)
    {
        $row = $request->get("row", 50);
        $search_ip = $request->get("search_ip", '');
        $page = $request->get("page", 1);
        $sfield = $request->get("sfield", "");
        $sdir = $request->get("sdir", "");
        $from = $request->get("from", date("d/m/Y"));
        $to = $request->get("to", date("d/m/Y"));
        $date_picker = $from . " - " . $to;
        if(empty($from)) $from = date("d/m/Y");
        if(empty($to)) $to = date("d/m/Y");

        $sfrom = \DateTime::createFromFormat("d/m/Y", $from)->format("Y-m-d");
        $sto = \DateTime::createFromFormat("d/m/Y", $to)->format("Y-m-d");
        $sto = date('Y-m-d', strtotime($sto.' +1 days'));
        $domain = DB::table("domains")
            ->where('id', '=', Session::get('domain_id_choose'))
            ->first();

        $query = DB::table("customer_information");
        //    ->leftJoin('posts', 'users.id', '=', 'posts.user_id')
        $data_result = $query->paginate($row);
        $data_result->appends(["row" => $row, "search_ip" => $search_ip, "sfield" => $sfield, "sdir" => $sdir, "from" => $from, "to" => $to])->links();

        return view('front.customer.thuthapthongtin-baocao')
            ->with(compact('row'))
            ->with(compact('search_ip'))
            ->with(compact('page'))
            ->with(compact('sfield'))
            ->with(compact('sdir'))
            ->with(compact('from'))
            ->with(compact('to'))
            ->with(compact('data_result'))
            ;
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

    public function post_cauhinh_chanclicktac(Request $request)
    {
        if ($request->has('deny_ip')) {
            $domain = DB::table("domains")
                ->where('id', '=', $request->domain_id)
                ->update(['deny_ip' => $request->deny_ip]);
            return Redirect::back()->with('ok', 'Đã chặn thành công các IP đã yêu cầu!');
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
                    'push_to_adwords' => $request->push_to_adwords,
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

                return Redirect::back()->with('ok', 'Đã cập nhật thành công!');
            }
        }
    }
    public function ajax_block_ip($id = 0, $ip = "") {
        $domain = DB::table("domains")
            ->where('id', '=', Session::get('domain_id_choose'))
            ->first();

        if(!empty($domain)){
            if(empty($domain->adword_account)) {
                return Redirect::back()->with('error', "Domain chưa cấu hình tài khoản adword. <a href='/click/cauhinh-chanclicktac'>Cấu hình ngay!</a>");
            } else {
                $response = cURL::get("http://adwords.fff.com.vn/campaign-block-a-ip.php?adword={$domain->adword_account}&blockip={$ip}");
                //if("" . $response->body != "") {
                    $this->remove_ignore_ip($ip);
                    $this->add_block_ip($ip);
                    DB::table('domain_virtual_click')
                        ->where('id', $id)
                        ->update(['status' => 2]);

                    return "Đã chặn thành công";
                //} else {
                //    return $response;
                //}
            }
        }
    }

    public function ajax_unblock_ip($id = 0, $ip = "") {
        $domain = DB::table("domains")
            ->where('id', '=', Session::get('domain_id_choose'))
            ->first();

        if(!empty($domain)){
            if(empty($domain->adword_account)) {
                return Redirect::back()->with('error', "Domain chưa cấu hình tài khoản adword. <a href='/click/cauhinh-chanclicktac'>Cấu hình ngay!</a>");
            } else {
                $response = cURL::get("http://adwords.fff.com.vn/campaign-unblock-a-ip.php?adword={$domain->adword_account}&blockip={$ip}");
                //if("" . $response->body != "") {
                    $this->add_ignore_ip($ip);
                    $this->remove_block_ip($ip);

                    DB::table('domain_virtual_click')
                        ->where('id', $id)
                        ->update(['status' => -1]);

                    return "Đã chặn thành công";
                //} else {
                //    return $response;
                //}
            }
        }
    }

    function add_block_ip($ip = "") {
        $domain = DB::table("domains")
            ->where('id', '=', Session::get('domain_id_choose'))
            ->first();
        $arr_ip = explode(",", $domain->blocked_ip);
        if(in_array($ip, $arr_ip) == false) {
            array_push($arr_ip, $ip);
            $arr_ip = array_filter($arr_ip);
            $str_ip = implode(",", $arr_ip);

            DB::table("domains")
                ->where('id', '=', Session::get('domain_id_choose'))
                ->update(['blocked_ip' => $str_ip]);
        }
    }

    function remove_block_ip($ip = "") {
        $domain = DB::table("domains")
            ->where('id', '=', Session::get('domain_id_choose'))
            ->first();

        $arr_ip = explode(",", $domain->blocked_ip);
        if(in_array($ip, $arr_ip) == true) {
            $arr_ip = array_diff($arr_ip, array($ip));
            $str_ip = implode(",", $arr_ip);

            DB::table("domains")
                ->where('id', '=', Session::get('domain_id_choose'))
                ->update(['blocked_ip' => $str_ip]);
        }
    }

    function add_ignore_ip($ip = "") {
        $domain = DB::table("domains")
            ->where('id', '=', Session::get('domain_id_choose'))
            ->first();
        $arr_ip = explode(",", $domain->ignore_ip);
        if(in_array($ip, $arr_ip) == false) {
            array_push($arr_ip, $ip);
            $arr_ip = array_filter($arr_ip);
            $str_ip = implode(",", $arr_ip);

            DB::table("domains")
                ->where('id', '=', Session::get('domain_id_choose'))
                ->update(['ignore_ip' => $str_ip]);
        }
    }

    function remove_ignore_ip($ip = "") {
        $domain = DB::table("domains")
            ->where('id', '=', Session::get('domain_id_choose'))
            ->first();

        $arr_ip = explode(",", $domain->ignore_ip);
        if(in_array($ip, $arr_ip) == true) {
            $arr_ip = array_diff($arr_ip, array($ip));
            $str_ip = implode(",", $arr_ip);

            DB::table("domains")
                ->where('id', '=', Session::get('domain_id_choose'))
                ->update(['ignore_ip' => $str_ip]);
        }
    }

    public function ajax_click_ao_header() {
        $from = date("Y-m-d");
        $to = date("Y-m-d");
        $to = date('Y-m-d', strtotime($to.' +1 days'));
        $domain = DB::table("domains")
            ->where('id', '=', Session::get('domain_id_choose'))
            ->first();

        //Yesterday
        $yes_from = date('Y-m-d', strtotime($from.' -1 days'));
        $yes_to = $from;
        $yes_computer = DB::table("domain_virtual_click")
            ->selectRaw("count(`id`) as web, sum(`is_virtual_click`) as click")
            ->where("domain_key", $domain->keycode)
            ->where('created', '>=', $yes_from)
            ->where('created', '<', $yes_to)
            ->where("device", "Computer");
        $result_computer = $yes_computer->first();

        $yes_tablet = DB::table("domain_virtual_click")
            ->selectRaw("count(`id`) as web, sum(`is_virtual_click`) as click")
            ->where("domain_key", $domain->keycode)
            ->where('created', '>=', $yes_from)
            ->where('created', '<', $yes_to)
            ->where("device", "Tablet");
        $result_tablet = $yes_tablet->first();

        $yes_phone = DB::table("domain_virtual_click")
            ->selectRaw("count(`id`) as web, sum(`is_virtual_click`) as click")
            ->where("domain_key", $domain->keycode)
            ->where('created', '>=', $yes_from)
            ->where('created', '<', $yes_to)
            ->where("device", "Phone");
        $result_phone = $yes_phone->first();

        $yes_traffic = $result_computer->web + $result_tablet->web + $result_phone->web;
        $yes_click = $result_computer->click + $result_tablet->click + $result_phone->click;

        //Today
        $query_computer = DB::table("domain_virtual_click")
            ->selectRaw("count(`id`) as web, sum(`is_virtual_click`) as click")
            ->where("domain_key", $domain->keycode)
            ->where('created', '>=', $from)
            ->where('created', '<', $to)
            ->where("device", "Computer");
        $result_computer = $query_computer->first();

        $query_tablet = DB::table("domain_virtual_click")
            ->selectRaw("count(`id`) as web, sum(`is_virtual_click`) as click")
            ->where("domain_key", $domain->keycode)
            ->where('created', '>=', $from)
            ->where('created', '<', $to)
            ->where("device", "Tablet");
        $result_tablet = $query_tablet->first();

        $query_phone = DB::table("domain_virtual_click")
            ->selectRaw("count(`id`) as web, sum(`is_virtual_click`) as click")
            ->where("domain_key", $domain->keycode)
            ->where('created', '>=', $from)
            ->where('created', '<', $to)
            ->where("device", "Phone");
        $result_phone = $query_phone->first();

        $today_traffic = $result_computer->web + $result_tablet->web + $result_phone->web;
        $today_click = $result_computer->click + $result_tablet->click + $result_phone->click;

        if($today_traffic == 0) {
            $today_traffic_percent = [
                "pc" => 0,
                "tablet" => 0,
                "phone" => 0,
            ];
        } else {
            $today_traffic_percent = [
                "pc" => round($result_computer->web/$today_traffic * 100, 2),
                "tablet" => round($result_tablet->web/$today_traffic * 100, 2),
                "phone" => round($result_phone->web/$today_traffic * 100, 2),
            ];
        }

        if($today_click == 0) {
            $today_click_percent = [
                "pc" => 0,
                "tablet" => 0,
                "phone" => 0,
            ];
        } else {
            $today_click_percent = [
                "pc" => round($result_computer->click/$today_click * 100, 2),
                "tablet" => round($result_tablet->click/$today_click * 100, 2),
                "phone" => round($result_phone->click/$today_click * 100, 2),
            ];
        }

        if($yes_traffic == 0) {
            $web_increase_val = 100;
        } else {
            $web_increase_val = round($today_traffic/$yes_traffic * 100, 2);
        }
        if($yes_click == 0) {
            $click_increase_val = 100;
        } else {
            $click_increase_val = round($today_click/$yes_click * 100, 2);
        }

        $web_increase = false;
        if($web_increase_val >= 100) {
            $web_increase = true;
            $web_increase_val -= 100;
        }
        $click_increase = false;
        if($click_increase_val >= 100) {
            $click_increase = true;
            $click_increase_val -= 100;
        }

        $cpc = 0;
        try {
            $response = cURL::get("http://adwords.fff.com.vn/homepage-campaign-performance-report.php?adword={$domain->adword_account}");
            if($response->body) {
                $cpc = json_decode($response->body)->data->cpc;
            }
        } catch (Exception $e) {

        }
        $save_click = $today_click * $cpc;
        if($today_traffic == 0) {
            $save_percent = 0;
        } else {
            $save_percent = round($today_click / $today_traffic * 100, 2);
        }

        //Chart
        $realtime = array();
        $time = time();


        $second_step = 60;
        $num_record = 16;
        for ($i=$num_record * $second_step; $i>$second_step; $i=$i-$second_step){
            $starttime = date("Y-m-d H:i:s", strtotime("-$i seconds", $time));
            $e = $i-$second_step;
            $endtime = date("Y-m-d H:i:s", strtotime("-$e seconds", $time));

            $query_tablet = DB::table("domain_virtual_click")
                ->where("domain_key", $domain->keycode)
                ->where('created', '>=', $starttime)
                ->where('created', '<=', $endtime)
                ->where("device", "Tablet");
            $countRealUser = $query_tablet->count();
            $real_data_traffic[] = $countRealUser;
        }
        $real_data_traffic = json_encode($real_data_traffic);
        //dd($real_data_traffic);

        for ($i=$num_record * $second_step; $i>$second_step; $i=$i-$second_step){
            $starttime = date("Y-m-d H:i:s", strtotime("-$i seconds", $time));
            $e = $i-$second_step;
            $endtime = date("Y-m-d H:i:s", strtotime("-$e seconds", $time));

            $query_tablet = DB::table("domain_virtual_click")
                ->where("domain_key", $domain->keycode)
                ->where("is_virtual_click", 1)
                ->where('created', '>=', $starttime)
                ->where('created', '<=', $endtime)
                ->where("device", "Tablet");
            $countRealUser = $query_tablet->count();
            $real_data_click[] = $countRealUser;
        }
        $real_data_click = json_encode($real_data_click);
        //dd($data_click);



        return view('front.virtualclicks.ajax-ip-click-ao')
            ->with('traffic', $today_traffic_percent)
            ->with('click', $today_click_percent)
            ->with('web_increase', $web_increase)
            ->with('web_increase_val', $web_increase_val)
            ->with('click_increase', $click_increase)
            ->with('click_increase_val', $click_increase_val)
            ->with('save_click', $save_click)
            ->with('save_percent', $save_percent)
            ->with('save_percent', $save_percent)
            ->with('real_data_traffic', $real_data_traffic)
            ->with('real_data_click', $real_data_click)
            ;

        return json_encode($arr);

    }

}
