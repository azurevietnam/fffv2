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
                    <div class="input-group"><input class="form-control input-daterange-datepicker" placeholder="01/01/2015 - 01/31/2015" type="text"> <span class="input-group-addon"><i class="icon-calender"></i></span> </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>

            <!-- .row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="white-box">
                        <h3 class="box-title m-b-0">Danh sách IP</h3>
                        <p class="text-muted m-b-20">Danh sách IP click và truy cập website của bạn</p>
                        <div class="table-responsive dataTables_wrapper ">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>Stt</th>
                                    <th>Lần click đầu</th>
                                    <th>IP</th>
                                    <th>Số click</th>
                                    <th>Xem trang</th>
                                    <th>Chi phí</th>
                                    <th>Phá hoại</th>
                                    <th>Thiết bị</th>
                                    <th>Trình duyệt</th>
                                    <th>Tỉnh thành</th>
                                    <th>Quốc gia</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td><a href="javascript:void(0)">1</a></td>
                                    <td>18:00:00 20/10/2016</td>
                                    <td><div class="label label-table label-success">192.168.1.1</div></td>
                                    <td>1</td>
                                    <td>3</td>
                                    <td>310.000 vnd</td>
                                    <td>
                                        <div class="label label-table label-success">KHÔNG</div>
                                    </td>
                                    <td>IPHONE</td>
                                    <td>Safari</td>
                                    <td>Hà Nội</td>
                                    <td>Việt Nam</td>
                                </tr>
                                <tr>
                                    <td><a href="javascript:void(0)">2</a></td>
                                    <td>19:00:00 20/10/2016</td>
                                    <td><div class="label label-table label-danger">192.168.1.2</div></td>
                                    <td>3</td>
                                    <td>3</td>
                                    <td>310.000 vnd</td>
                                    <td>
                                        <div class="label label-table label-danger">CÓ</div>
                                    </td>
                                    <td>IPHONE</td>
                                    <td>Safari</td>
                                    <td>Hà Nội</td>
                                    <td>Việt Nam</td>
                                </tr>
                                </tbody>
                            </table>
                            <div class="dataTables_paginate paging_simple_numbers" id="myTable_paginate">
                                <a class="paginate_button previous disabled" aria-controls="myTable" data-dt-idx="0" tabindex="0" id="myTable_previous">Trước</a>
                                <span>
                                    <a class="paginate_button current" aria-controls="myTable" data-dt-idx="1" tabindex="0">1</a>
                                    <a class="paginate_button " aria-controls="myTable" data-dt-idx="2" tabindex="0">2</a>
                                    <a class="paginate_button " aria-controls="myTable" data-dt-idx="3" tabindex="0">3</a>
                                    <a class="paginate_button " aria-controls="myTable" data-dt-idx="4" tabindex="0">4</a>
                                    <a class="paginate_button " aria-controls="myTable" data-dt-idx="5" tabindex="0">5</a>
                                    <a class="paginate_button " aria-controls="myTable" data-dt-idx="6" tabindex="0">6</a>
                                </span>
                                <a class="paginate_button next" aria-controls="myTable" data-dt-idx="7" tabindex="0" id="myTable_next">Sau</a></div>
                        </div>

                    </div>
                </div>
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
