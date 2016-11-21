@extends('front.template')

@section('main')
    <div id="wrapper">
        <!-- Navigation - Top -->
    @include('front/modules/nav-top')
    <!-- Navigation - Top -->

        <!-- Left navbar-header -->
    @include('front/modules/nav-left')
    <!-- Left navbar-header end -->
    <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Cấu hình chặn click tặc</h4> </div>
                    <div class="col-lg-6 col-sm-4 col-md-4 col-xs-12"> </div>
                    <div class="col-lg-3 col-sm-4 col-md-4 col-xs-12">

                    </div>
                    <!-- /.col-lg-12 -->
                </div>

                <!-- .row -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title m-b-0">Mã Tracking</h3>
                            <p class="text-muted m-b-30 font-13">Để có thể tracking và chặn click tặc tốt nhất, bạn vui lòng thực hiện 2 bước gắn mã theo dõi sau.</p>
                            <form class="form-horizontal">
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="example-input-normal">Bước 1: Adwords Tracking URL</label>
                                    <div class="col-sm-9">
                                        {!! Form::input("text", "tracking_url", $domain->tracking_url, ['class' => 'form-control', 'required' => '', 'onclick' => "this.focus();this.select()"]) !!}
                                        {!! $errors->first('tracking_url', '<small class="help-block">:message</small>') !!}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-3">Bước 2: Mã theo dõi <br><p class="content-group-lg">Bạn cần copy đoạn mã và dán vào trước thẻ <span class="text-warning"><strong>&lt;/head&gt;</strong></span> của website.</p></label>
                                    <div class="col-sm-9">
                                        {!! Form::textarea('tracking_code', $domain->tracking_code, ['rows'=>"8", 'cols'=>"5",'class' => 'form-control', 'required' => '', 'onclick' => "this.focus();this.select()"]) !!}
                                        {!! $errors->first('tracking_code', '<small class="help-block">:message</small>') !!}
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="white-box">
                            <h3 class="box-title m-b-0">Chặn Click Ảo Theo Hành Vi IP </h3>
                            <p class="text-muted m-b-30 font-13">Vui lòng cấu hình hành vi IP để chặn click ảo</p>
                            <form class="form-horizontal">
                                <div class="form-group">
                                    <label class="col-sm-3">Chặn 1 ip khi</label>
                                    <div class="col-sm-9">
                                        <select name="config_click" id="config_click" class="form-control">
                                            <option value="0">Không chặn</option>
                                            <option value="1" {{ $rule->config_click == 1 ? 'selected' : '' }}>Click quảng cáo 1 lần</option>
                                            <option value="2" {{ $rule->config_click == 2 ? 'selected' : '' }}>Click quảng cáo 2 lần</option>
                                            <option value="3" {{ $rule->config_click == 3 ? 'selected' : '' }}>Click quảng cáo 3 lần</option>
                                            <option value="4" {{ $rule->config_click == 4 ? 'selected' : '' }}>Click quảng cáo 4 lần</option>
                                            <option value="5" {{ $rule->config_click == 5 ? 'selected' : '' }}>Click quảng cáo 5 lần</option>
                                            <option value="6" {{ $rule->config_click == 6 ? 'selected' : '' }}>Click quảng cáo 6 lần</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3">Trong vòng</label>
                                    <div class="col-sm-9">
                                        <select name="config_time" id="config_time" class="form-control">
                                            <option value="0"> Không quan tâm </option>
                                            <option value="30" {{ $rule->config_time == 30 ? 'selected' : '' }}> 30 phút </option>
                                            <option value="60" {{ $rule->config_time == 60 ? 'selected' : '' }}> 1 tiếng </option>
                                            <option value="120" {{ $rule->config_time == 120 ? 'selected' : '' }}> 2 tiếng </option>
                                            <option value="180" {{ $rule->config_time == 180 ? 'selected' : '' }}> 3 tiếng </option>
                                            <option value="240" {{ $rule->config_time == 240 ? 'selected' : '' }}> 4 tiếng </option>
                                            <option value="300" {{ $rule->config_time == 300 ? 'selected' : '' }}> 5 tiếng </option>
                                            <option value="360" {{ $rule->config_time == 360 ? 'selected' : '' }}> 6 tiếng </option>
                                            <option value="720" {{ $rule->config_time == 720 ? 'selected' : '' }}> 12 tiếng </option>
                                            <option value="1440" {{ $rule->config_time == 1440 ? 'selected' : '' }}> 1 ngày </option>
                                            <option value="2880" {{ $rule->config_time == 2880 ? 'selected' : '' }}> 2 ngày </option>
                                            <option value="4320" {{ $rule->config_time == 4320 ? 'selected' : '' }}> 3 ngày </option>
                                            <option value="10080" {{ $rule->config_time == 10080 ? 'selected' : '' }}> 7 ngày </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3">Số trang IP đó xem</label>
                                    <div class="col-sm-9">
                                        <select name="" id="config_viewpage" class="form-control">
                                            <option value="0"> Không quan tâm </option>
                                            <option value="1" {{ $rule->config_viewpage == 1 ? 'selected' : '' }}>Xem 1 trang</option>
                                            <option value="2" {{ $rule->config_viewpage == 2 ? 'selected' : '' }}>Xem 2 trang</option>
                                            <option value="3" {{ $rule->config_viewpage == 3 ? 'selected' : '' }}>Xem 3 trang</option>
                                            <option value="4" {{ $rule->config_viewpage == 4 ? 'selected' : '' }}>Xem 4 trang</option>
                                        </select>
                                    </div>
                                </div>
                                <hr>
                                <div class="form-group">
                                    <label class="col-lg-3">Chặn theo 3G<br> (Tùy chọn chặn khi người dùng sử dụng thiết bị 3G) </label>
                                    <div class="col-lg-9">
                                        <div class="checkbox checkbox-success">
                                            <input id="net_viettel" name="net_viettel" type="checkbox">
                                            <label for="net_viettel"> Mạng Viettel</label>
                                        </div>
                                        <div class="checkbox checkbox-success">
                                            <input id="net_mobifone" name="net_mobifone" type="checkbox">
                                            <label for="net_mobifone"> Mạng Mobifone</label>
                                        </div>
                                        <div class="checkbox checkbox-success">
                                            <input id="net_vinaphone" name="net_vinaphone" type="checkbox">
                                            <label for="net_vinaphone"> Mạng Vinaphone</label>
                                        </div>

                                    </div>
                                </div>
                                <hr>
                                <div class="form-group">
                                    <label class="col-lg-3">Chặn theo thiết bị truy cập<br> (Tùy chọn chặn theo thiết bị sử dụng) </label>
                                    <div class="col-lg-9">
                                        <div class="checkbox checkbox-success">
                                            <input id="device_pc" name="device_pc" type="checkbox">
                                            <label for="device_pc"> Máy Tính</label>
                                        </div>
                                        <div class="checkbox checkbox-success">
                                            <input id="device_tablet" name="device_tablet" type="checkbox">
                                            <label for="device_tablet"> Mobile</label>
                                        </div>
                                        <div class="checkbox checkbox-success">
                                            <input id="device_phone" name="device_phone" type="checkbox">
                                            <label for="device_phone"> Tablet</label>
                                        </div>

                                    </div>
                                </div>
                            </form>
                            <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Lưu & Thực hiện chặn</button>
                        </div>
                        <div class="white-box">
                            <h3 class="box-title m-b-0">Loại trừ đặc biệt</h3>
                            <p class="text-muted m-b-30 font-13"> Ngăn quảng cáo hiển thị theo các IP hoặc dãy IP sau</p>
                            <form class="form-horizontal">
                                <div class="form-group">
                                    <div class="col-sm-12 col-xs-12">
                                        <div class="col-md-12">
                                            {!! Form::textarea('special_block', $domain->special_block, ['rows'=>"5", 'class' => 'form-control', 'placeholder' => 'Ví dụ: Mỗi 1 dãy ip trên 1 dòng. Cấu trúc 123.123.*.*']) !!}
                                        </div>
                                    </div>

                                </div>

                            </form>
                            <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Lưu & Thực hiện chặn</button>
                        </div>
                    </div>

                </div>
                <!-- /.row -->

            </div>
            <!-- row -->
            <!-- /.row -->
            <!-- .right-sidebar -->
            @include("front/modules/nav-right")
        <!-- /.right-sidebar -->
        </div>
        <!-- /.container-fluid -->
        <footer class="footer text-center"> 2016 &copy; FFF.COM.VN - New version </footer>
    </div>
    <!-- /#page-wrapper -->
    <!-- /#wrapper -->
    <!-- jQuery -->

@endsection

@section('scripts')
    <script>
        $(function () {
            @if($rule->net_viettel)
                $('#net_viettel').trigger('click');
            @endif
            @if($rule->net_mobifone)
                $('#net_mobifone').trigger('click');
            @endif
            @if($rule->net_vinaphone)
                $('#net_vinaphone').trigger('click');
            @endif
            @if($rule->device_pc)
                $('#device_pc').trigger('click');
            @endif
            @if($rule->device_tablet)
                $('#device_tablet').trigger('click');
            @endif
            @if($rule->device_phone)
                $('#device_phone').trigger('click');
            @endif
        });
    </script>
@endsection