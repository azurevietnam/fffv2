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
                    <div class="col-lg-12">
                        <form class="form-horizontal" id="form_display_ip" method="get" action="/customer/phone/thuthapthongtin-baocao" accept-charset="utf-8">
                            <input type="hidden" id="num_page" name="page" value="{{ $page }}">
                            <input type="hidden" id="sort_field" name="sfield" value="{{ $sfield }}">
                            <input type="hidden" id="sort_direction" name="sdir" value="{{ $sdir }}">
                            <input type="hidden" id="fromdate" name="from" value="{{ $from }}">
                            <input type="hidden" id="today" name="to" value="{{ $to }}">
                            <div class="white-box">
                                <h3 class="box-title m-b-0">BÁO CÁO THU THẬP KHÁCH HÀNG</h3>
                                <p class="text-muted m-b-20">Thông tin thu thập từ các popup nhận thông tin khách hàng. Mở tính năng <a href="thuthapthongtin-cauhinh.php">Cấu hình Popup</a> để thu thập nhiều khách hàng hơn</p>
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

                                    <!-- Nav tabs -->
                                    <!--
                                    <ul class="nav customtab2 nav-tabs" role="tablist">
                                        <li role="presentation" class="active"><a href="#home6" aria-controls="home" role="tab" data-toggle="tab" aria-expanded="false"><span class="visible-xs"><i class="ti-home"></i></span><span class="hidden-xs"> Toàn bộ (100)</span></a></li>
                                        <li role="presentation" class=""><a href="#profile6" aria-controls="profile" role="tab" data-toggle="tab" aria-expanded="false"><span class="visible-xs"><i class="ti-user"></i></span> <span class="hidden-xs">Trang chủ (10)</span></a></li>
                                        <li role="presentation" class=""><a href="#messages6" aria-controls="messages" role="tab" data-toggle="tab" aria-expanded="true"><span class="visible-xs"><i class="ti-email"></i></span> <span class="hidden-xs">Trang con 1 (3)</span></a></li>
                                        <li role="presentation" class=""><a href="#settings6" aria-controls="settings" role="tab" data-toggle="tab" aria-expanded="false"><span class="visible-xs"><i class="ti-settings"></i></span> <span class="hidden-xs">Trang con 2 (30)</span></a></li>
                                        <li role="presentation" class=""><a href="#settings6" aria-controls="settings" role="tab" data-toggle="tab" aria-expanded="false"><span class="visible-xs"><i class="ti-settings"></i></span> <span class="hidden-xs">Trang con 3 (30)</span></a></li>
                                        <li role="presentation" class=""><a href="#settings6" aria-controls="settings" role="tab" data-toggle="tab" aria-expanded="false"><span class="visible-xs"><i class="ti-settings"></i></span> <span class="hidden-xs">Trang con 4 (30)</span></a></li>
                                        <li role="presentation" class=""><a href="#settings6" aria-controls="settings" role="tab" data-toggle="tab" aria-expanded="false"><span class="visible-xs"><i class="ti-settings"></i></span> <span class="hidden-xs">Trang con 5 (30)</span></a></li>
                                    </ul>
                                    -->
                                    <!-- Tab panes -->
                                    <div class="table-responsive dataTables_wrapper ">
                                        <div style="margin-bottom: 5px;" class="dataTables_paginate paging_simple_numbers" id="div_paging">
                                            <span class="paging_total">Tìm thấy {{ number_format($data_result->total())}} kết quả</span> {{$data_result->lastPage() > 0 ? $data_result->render() : ""}}
                                        </div>
                                        <table class="table color-table inverse-table valign-middle">
                                            <thead>
                                            <tr>
                                                <th>Stt</th>

                                                <th>Họ & Tên</th>
                                                <th>Phone</th>
                                                <th>Email</th>
                                                <th>Facebook</th>
                                                <th>Zalo</th>

                                                <th>Lần xem cuối</th>
                                                <th>Lần xem đầu</th>
                                                <th>Số trang xem</th>
                                                <th>Thiết bị</th>
                                                <th>Trình duyệt</th>
                                                <th>Tỉnh thành</th>
                                                <th>Quốc gia</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach ($data_result as $element)
                                                <tr>
                                                    <td><a href="javascript:void(0)">1</a></td>

                                                    <td><a href="">{{$element->name}}</a></td>
                                                    <td><strong>{{$element->phone}}</strong></td>
                                                    <td><button class="btn btn-outline btn-info waves-effect waves-light" type="button"> <i class="fa fa-envelope"></i> </button></td>
                                                    <td><a href="facebook.com/gaucho"><button class="btn btn-outline btn-info waves-effect waves-light" type="button">
                                                                <i class="fa fa-facebook"></i> </button></a></td>
                                                    <td><button type="button" class="btn btn-outline btn-info waves-effect waves-light" data-toggle="tooltip" data-placement="top" title="" data-original-title="Chat với khách hàng"><i class="fa fa-comments-o m-r-5"></i> </button></td>


                                                    <td>1 phút trước</td>
                                                    <td>18h00 - 20/10</td>
                                                    <td>3 trang</td>

                                                    <td>IPHONE</td>
                                                    <td>Safari</td>
                                                    <td>{{$element->region_name}}</td>
                                                    <td>{{$element->country_name}}</td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                        <div style="margin-bottom: 5px;" class="dataTables_paginate paging_simple_numbers" id="div_paging">
                                            <span class="paging_total">Tìm thấy {{ number_format($data_result->total())}} kết quả</span> {{$data_result->lastPage() > 0 ? $data_result->render() : ""}}
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </form>
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
        function submit_form() {
            $("#form_display_ip").submit();
        }

        $(function () {
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
        });
    </script>
@endsection