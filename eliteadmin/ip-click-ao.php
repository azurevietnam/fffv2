<? include("./modules/header.php");
  $left_menu = "small";//thu nho slidebar
?>
<body class="content-wrapper">
    <!-- Preloader -->
    <div class="preloader">
        <div class="cssload-speeding-wheel"></div>
    </div>
    <div id="wrapper">
        <!-- Navigation - Top -->
		<? include("./modules/nav-top.php");?>
        <!-- Navigation - Top -->
        
        <!-- Left navbar-header -->
        <? include("./modules/nav-left.php");?>
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
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <div class="white-box">
                            <h3 class="box-title"><small class="pull-right m-t-10 text-success"><i class="fa fa-sort-asc"></i> Tăng 18% so với hôm qua</small> WEBSITE TRAFFIC</h3>
                            <div class="stats-row">
                                <div class="stat-item">
                                    <h6>PC</h6> <b>80.40%</b></div>
                                <div class="stat-item">
                                    <h6>Mobile</h6> <b>15.40%</b></div>
                                <div class="stat-item">
                                    <h6>Tablet</h6> <b>5.50%</b></div>
                            </div>
                            <div id="sparkline8"></div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <div class="white-box">
                            <h3 class="box-title"><small class="pull-right m-t-10 text-danger"><i class="fa fa-sort-desc"></i> Giảm 19% so với hôm qua</small>CLICK ẢO</h3>
                            <div class="stats-row">
                                <div class="stat-item">
                                    <h6>PC</h6> <b>80.40%</b></div>
                                <div class="stat-item">
                                    <h6>Mobile</h6> <b>15.40%</b></div>
                                <div class="stat-item">
                                    <h6>Tablet</h6> <b>5.50%</b></div>
                            </div>
                            <div id="sparkline9"></div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 col-xs-12">
                       <div class="white-box" style="min-height:215px">
						<h3 class="box-title"><i class="ti-cut text-danger"></i> TIẾT KIỆM ƯỚC TÍNH</h3>
						<div class="text-right"> <span class="text-muted">Tiết kiệm từ đầu tháng</span>
						  <h1><sup><i class="ti-arrow-down text-danger"></i></sup> $5,000</h1>
						</div>
						<span class="text-danger">Tiết kiệm 50%</span>
						<div class="progress m-b-0">
						  <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:50%;"> <span class="sr-only">230% Complete</span> </div>
						</div>
					  </div>
                    </div>
                </div>
				 <!-- /.row -->
                <!-- .row -->
                <!-- .row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="white-box">
                            <h3 class="box-title m-b-0">Danh sách IP</h3>
                            <p class="text-muted m-b-20">Danh sách IP click và truy cập website của bạn. Bạn có thể chặn ngay IP click ảo hoặc <a href="">Cấu Hình Chặn Tự Động</a></p>
                            <div class="row padding-bottom-10px">
                                        <div class="col-sm-6" style="padding-top:10px">
                                            <label class="form-inline">HIỂN THỊ
											<select id="demo-show-entries" class="form-control input-sm">
												<option value="50">50</option>
												<option value="100">100</option>
												<option value="150">150</option>
												<option value="200">200</option>
											</select> KẾT QUẢ </label>
                                        </div>
                                        <div class="col-sm-6 text-right">
                                            <div class="form-group">
											<div class="input-group fix-300px pull-right"> <span class="input-group-btn">
                      <button type="button" class="btn waves-effect waves-light btn-default"><i class="fa fa-search"></i></button>
                      </span>
                                                <input type="text" id="example-input1-group2" name="example-input1-group2" class="form-control" placeholder="TÌM KIẾM"> </div>
                                        </div>
                            </div>
							 <div class="table-responsive dataTables_wrapper ">
							
							
                                <table class="table table-striped color-table inverse-table ">
                                    <thead>
                                        <tr>
                                            <th>Stt</th>
                                            <th>Lần click đầu</th>
                                            <th>IP</th>
                                            <th>Action</th>
                                            <th>Số click</th>
                                            <th>Xem trang</th>
                                            <th>Chi phí</th>
                                           
                                            <th>Thiết bị</th>
                                            <th>Trình duyệt</th>
                                            <th>Tỉnh thành</th>
                                            <th>Quốc gia</th>
											 <th>Tình Trạng</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><a href="javascript:void(0)">1</a></td>
                                            <td>18:00 - 20/10</td>
											<td><button class="btn btn-block btn-outline btn-info  btn-sm" data-toggle="tooltip" data-placement="top" title="" data-original-title="Xem lịch sử IP">192.168.1.1</button></td>
											<td><button class="btn btn-block btn-outline btn-success btn-sm " data-toggle="tooltip" data-placement="top" title="" data-original-title="Chặn ngay IP này">Chặn Ngay</button></td>
                                            
                                            <td>1</td>
                                            <td>3</td>
											 <td>310.000 vnd</td>
                                            
                                            <td>IPHONE</td>
                                            <td>Safari</td>
                                            <td>Hà Nội</td>
                                            <td>Việt Nam</td>
											<td><div class="label label-table label-success">Click Ảo</div></td>
                                        </tr>
                                        <tr>
                                            <td><a href="">1</a></td>
                                            <td>18:00 - 20/10</td>
											<td><button class="btn btn-block btn-outline btn-info  btn-sm" data-toggle="tooltip" data-placement="top" title="" data-original-title="Xem lịch sử IP">192.168.1.1</button></td>
											<td><button class="btn btn-block btn-outline btn-success btn-sm " data-toggle="tooltip" data-placement="top" title="" data-original-title="Chặn ngay IP này">Chặn Ngay</button></td>
                                            <td>1</td>
                                            <td>3</td>
											 <td>310.000 vnd</td>
                                            
                                            <td>IPHONE</td>
                                            <td>Safari</td>
                                            <td>Hà Nội</td>
                                            <td>Việt Nam</td>
											<td><div class="label label-table label-warning">Chờ chặn</div></td>
                                        </tr>
										 <tr>
                                            <td><a href="">1</a></td>
                                            <td>18:00 - 20/10</td>
											<td><button class="btn btn-block btn-outline btn-info  btn-sm" data-toggle="tooltip" data-placement="top" title="" data-original-title="Xem lịch sử IP">192.168.1.1</button></td>
											<td><button class="btn btn-block btn-outline btn-danger btn-sm" data-toggle="tooltip" data-placement="top" title="" data-original-title="Bỏ chặn IP này">Mở khóa</button></td>
                                            
                                            <td>1</td>
                                            <td>3</td>
											 <td>310.000 vnd</td>
                                            
                                            <td>IPHONE</td>
                                            <td>Safari</td>
                                            <td>Hà Nội</td>
                                            <td>Việt Nam</td>
											<td><div class="label label-table label-danger">Đã chặn</div></td>
                                        </tr>
										 <tr>
                                            <td><a href="">1</a></td>
                                            <td>18:00 - 20/10</td>
											<td><button class="btn btn-block btn-outline btn-info  btn-sm" data-toggle="tooltip" data-placement="top" title="" data-original-title="Xem lịch sử IP">192.168.1.1</button></td>
											<td><button class="btn btn-block btn-outline btn-success btn-sm " data-toggle="tooltip" data-placement="top" title="" data-original-title="Chặn ngay IP này">Chặn Ngay</button></td>
                                            <td>1</td>
                                            <td>3</td>
											 <td>310.000 vnd</td>
                                            
                                            <td>IPHONE</td>
                                            <td>Safari</td>
                                            <td>Hà Nội</td>
                                            <td>Việt Nam</td>
											<td><div class="label label-table label-warning">Chờ chặn</div></td>
                                        </tr>
										 <tr>
                                            <td><a href="">1</a></td>
                                            <td>18:00 - 20/10</td>
											<td><button class="btn btn-block btn-outline btn-info  btn-sm" data-toggle="tooltip" data-placement="top" title="" data-original-title="Xem lịch sử IP">192.168.1.1</button></td>
											<td><button class="btn btn-block btn-outline btn-success btn-sm " data-toggle="tooltip" data-placement="top" title="" data-original-title="Chặn ngay IP này">Chặn Ngay</button></td>
                                            <td>1</td>
                                            <td>3</td>
											 <td>310.000 vnd</td>
                                            
                                            <td>IPHONE</td>
                                            <td>Safari</td>
                                            <td>Hà Nội</td>
                                            <td>Việt Nam</td>
											<td><div class="label label-table label-warning">Chờ chặn</div></td>
                                        </tr>
										 <tr>
                                            <td><a href="">1</a></td>
                                            <td>18:00 - 20/10</td>
											<td><button class="btn btn-block btn-outline btn-info  btn-sm" data-toggle="tooltip" data-placement="top" title="" data-original-title="Xem lịch sử IP">192.168.1.1</button></td>
											<td><button class="btn btn-block btn-outline btn-success btn-sm " data-toggle="tooltip" data-placement="top" title="" data-original-title="Chặn ngay IP này">Chặn Ngay</button></td>
                                            <td>1</td>
                                            <td>3</td>
											 <td>310.000 vnd</td>
                                            
                                            <td>IPHONE</td>
                                            <td>Safari</td>
                                            <td>Hà Nội</td>
                                            <td>Việt Nam</td>
											<td><div class="label label-table label-warning">Chờ chặn</div></td>
                                        </tr>
										 <tr>
                                            <td><a href="">1</a></td>
                                            <td>18:00 - 20/10</td>
											<td><button class="btn btn-block btn-outline btn-info  btn-sm" data-toggle="tooltip" data-placement="top" title="" data-original-title="Xem lịch sử IP">192.168.1.1</button></td>
											<td><button class="btn btn-block btn-outline btn-success btn-sm " data-toggle="tooltip" data-placement="top" title="" data-original-title="Chặn ngay IP này">Chặn Ngay</button></td>
                                            <td>1</td>
                                            <td>3</td>
											 <td>310.000 vnd</td>
                                            
                                            <td>IPHONE</td>
                                            <td>Safari</td>
                                            <td>Hà Nội</td>
                                            <td>Việt Nam</td>
											<td><div class="label label-table label-warning">Chờ chặn</div></td>
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
                    <? include("modules/nav-right.php");?>
                    <!-- /.right-sidebar -->
                </div>
                <!-- /.container-fluid -->
                <footer class="footer text-center"> 2016 &copy; FFF.COM.VN - New version </footer>
            </div>
            <!-- /#page-wrapper -->
        </div>
        <!-- /#wrapper -->
        <!-- jQuery -->
  <? include("modules/footer.php");?>