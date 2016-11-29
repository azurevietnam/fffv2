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
                    <h4 class="page-title">IP Click Ảo</h4> </div>
                <div class="col-lg-6 col-sm-4 col-md-4 col-xs-12"> </div>
                <div class="col-lg-3 col-sm-4 col-md-4 col-xs-12">
                    <div class="input-group"><input value="{{$date_picker}}" class="form-control input-daterange-datepicker" placeholder="01/01/2015 - 01/31/2015" type="text"> <span class="input-group-addon"><i class="icon-calender"></i></span> </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>

            <!-- .row -->
            <div class="row" id="ajax-ip-click-ao">

            </div>
            <!-- /.row -->
            <!-- .row -->
            <!-- .row -->
            <div class="row">
                <div class="col-lg-12">
                    <form class="form-horizontal" id="form_display_ip" method="get" action="/click/ip-click-ao" accept-charset="utf-8">
                        <input type="hidden" id="num_page" name="page" value="{{ $page }}">
                        <input type="hidden" id="sort_field" name="sfield" value="{{ $sfield }}">
                        <input type="hidden" id="sort_direction" name="sdir" value="{{ $sdir }}">
                        <input type="hidden" id="fromdate" name="from" value="{{ $from }}">
                        <input type="hidden" id="today" name="to" value="{{ $to }}">
                        <div class="white-box">
                            <h3 class="box-title m-b-0">Danh sách IP</h3>
                            <p class="text-muted m-b-20">Danh sách IP click và truy cập website của bạn. Bạn có thể chặn ngay IP click ảo hoặc <a href="/click/cauhinh-chanclicktac">Cấu Hình Chặn Tự Động</a></p>
                            <div class="row padding-bottom-10px">
                                <div class="col-sm-6" style="padding-top:10px">
                                    <label class="form-inline">Hiển thị
                                        <select id="select_num_row" name="row" class="form-control input-sm">
                                            <option value="50" {{ $row == 50 ? 'selected' : '' }}>50</option>
                                            <option value="100" {{ $row == 100 ? 'selected' : '' }}>100</option>
                                            <option value="150" {{ $row == 150 ? 'selected' : '' }}>150</option>
                                            <option value="200" {{ $row == 200 ? 'selected' : '' }}>200</option>
                                        </select> kết quả </label>
                                </div>
                                <div class="col-sm-6 text-right">
                                    <div class="form-group" style="margin-bottom: 0px;">
                                        <div class="input-group fix-300px pull-right">
                                            <input type="text" name="search_ip" value="{{$search_ip}}" class="form-control" placeholder="Tìm kiếm ip">
                                            <span class="input-group-btn">
                                                <button type="button" id="btn_search" class="btn waves-effect waves-light btn-default"><i class="fa fa-search"></i></button>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="table-responsive dataTables_wrapper ">
                                    <div style="margin-bottom: 5px;" class="dataTables_paginate paging_simple_numbers" id="div_paging">
                                        <span class="paging_total">Tìm thấy {{ number_format($domain_logs->total())}} kết quả</span> {{$domain_logs->lastPage() > 0 ? $domain_logs->render() : ""}}
                                    </div>
                                    <table class="table table-striped color-table inverse-table ">
                                        <thead>
                                        <tr>
                                            <th>Stt</th>
                                            <th><span class="sort-caption" id="sort_created">Lần click đầu</span></th>
                                            <th>IP</th>
                                            <th>Action</th>
                                            <th><span class="sort-caption" id="sort_click">Số click</span></th>
                                            <th><span class="sort-caption" id="sort_view">Số trang xem</span></th>
                                            <th>Chi phí</th>

                                            <th>Thiết bị</th>
                                            <th>Trình duyệt</th>
                                            <th>Tỉnh thành</th>
                                            <th>Quốc gia</th>
                                            <th>Tình Trạng</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($domain_logs as $log)
                                                <tr>
                                                    <td>{{($page - 1) * $row + $loop->index + 1}}</td>
                                                    <td>{{ date('H:i:s d/m/Y', strtotime($log->created))}}</td>
                                                    <td>
                                                        <span class="btn btn-block btn-outline btn-info  btn-sm" data-toggle="tooltip" data-placement="top" title="" data-original-title="Xem lịch sử IP">{{$log->ip}}</span>
                                                    </td>
                                                    <td id="div_block_ip">
                                                        @if($log->status == -1 || $log->status == 0 || $log->status == 1)
                                                            <span id="block_ip" data-id="{{$log->id}}" data-value="{{$log->ip}}" class="btn btn-block btn-outline btn-success btn-sm " data-toggle="tooltip" data-placement="top" title="" data-original-title="Chặn ngay IP này">Chặn Ngay</span>
                                                        @elseif($log->status == 2)
                                                            <span id="unblock_ip" data-id="{{$log->id}}" data-value="{{$log->ip}}" class="btn btn-block btn-outline btn-danger btn-sm" data-toggle="tooltip" data-placement="top" title="" data-original-title="Bỏ chặn IP này">Mở khóa</span>
                                                        @endif
                                                    </td>
                                                    <td>{{number_format($log->click)}}/{{number_format($log->count_ip)}}</td>
                                                    <td>{{number_format($log->viewpage)}}/{{number_format($log->count_viewpage)}}</td>
                                                    <td>{{($log->click * $cpc) == 0 ? '' : (number_format($log->click * $cpc) . ' vnd')}}</td>

                                                    <td>{{$log->device == "Computer" ? "Computer" : $log->device_name}}</td>
                                                    <td>{{$log->browser}}</td>
                                                    <td>{{$log->city}}</td>
                                                    <td>{{$log->country}}</td>
                                                    <td>
                                                        @if($log->status == -1)
                                                            <div class="label label-table label-primary">Cho phép</div>
                                                        @elseif($log->status == 0)
                                                            <div class="label label-table label-success">Bình thường</div>
                                                        @elseif($log->status == 1)
                                                            <div class="label label-table label-warning">Chờ chặn</div>
                                                        @elseif($log->status == 2)
                                                            <div class="label label-table label-danger">Đã chặn</div>
                                                        @endif
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    <div style="margin-bottom: 5px;" class="dataTables_paginate paging_simple_numbers" id="div_paging">
                                        <span class="paging_total">Tìm thấy {{ number_format($domain_logs->total())}} kết quả</span> {{$domain_logs->lastPage() > 0 ? $domain_logs->render() : ""}}
                                    </div>
                                </div>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        <!-- row -->
        <!-- /.row -->
        <!-- .right-sidebar -->
        @include('front/modules/nav-right')
        <!-- /.right-sidebar -->
        </div>
        <!-- /.container-fluid -->
        <footer class="footer text-center"> 2016 &copy; FFF.COM.VN - New version </footer>
    </div>
    <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
    <!-- jQuery -->

@endsection

@section('scripts')
<script>
    function submit_form() {
        var fromdate = $("input[name=daterangepicker_start]").val();
        var todate = $("input[name=daterangepicker_end]").val();
        if(fromdate != "") {
            $("#fromdate").val(fromdate);
        }
        if(todate != "") {
            $("#today").val(todate);
        }
        $("#form_display_ip").submit();
    }

    function ajax_header_report(){
        var request_url = "/click/ajax-click-ao-header";
        $.ajax({url: request_url , success: function(result){
            $("#ajax-ip-click-ao").html(result);
            setTimeout(ajax_header_report, 10000);
        }});
    }
    $(function () {
        ajax_header_report();


        $("#select_num_row").change(function(){
            $("#num_page").val("1");
            submit_form();
        });
        $("#btn_search").click(function(){
            $("#num_page").val("1");
            submit_form();
        });
        $("#sort_created").click(function(){
            if($("#sort_field").val() != "created") {
                $("#sort_field").val('created');
                $("#sort_direction").val('asc');
            } else {
                if($("#sort_direction").val() == 'asc') {
                    $("#sort_direction").val('desc');
                } else {
                    $("#sort_direction").val('asc');
                }
            }
            submit_form();
        });
        $("#sort_click").click(function(){
            if($("#sort_field").val() != "click") {
                $("#sort_field").val('click');
                $("#sort_direction").val('asc');
            } else {
                if($("#sort_direction").val() == 'asc') {
                    $("#sort_direction").val('desc');
                } else {
                    $("#sort_direction").val('asc');
                }
            }
            submit_form();
        });
        $("#sort_view").click(function(){
            if($("#sort_field").val() != "viewpage") {
                $("#sort_field").val('viewpage');
                $("#sort_direction").val('asc');
            } else {
                if($("#sort_direction").val() == 'asc') {
                    $("#sort_direction").val('desc');
                } else {
                    $("#sort_direction").val('asc');
                }
            }
            submit_form();
        });

        $(".daterangepicker .applyBtn").click(function(){
            $("#num_page").val("1");
            submit_form();
        });

        $("#div_block_ip #block_ip").click(function(){
            var log_id = $(this).attr("data-id");
            var log_ip = $(this).attr("data-value");
            $(this).html('Đang chặn ...');
            var request_url = "/click/ajax-block-ip/" + log_id + "/" + log_ip;
            $.ajax({url: request_url , success: function(result){
                //alert(result);
                location.reload();
            }});
        });

        $("#div_block_ip #unblock_ip").click(function(){
            var log_id = $(this).attr("data-id");
            var log_ip = $(this).attr("data-value");
            $(this).html('Đang mở ...');
            var request_url = "/click/ajax-unblock-ip/" + log_id + "/" + log_ip;
            $.ajax({url: request_url , success: function(result){
                //alert(result);
                location.reload();
            }});
        });




    });
</script>
@endsection