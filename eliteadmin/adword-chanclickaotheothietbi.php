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
                        <h4 class="page-title">CHẶN CLICK ẢO THEO THIẾT BỊ</h4> </div>
						<div class="col-lg-6 col-sm-4 col-md-4 col-xs-12"> </div>
						<div class="col-lg-3 col-sm-4 col-md-4 col-xs-12"> 
							<div class="input-group"><input class="form-control input-daterange-datepicker" placeholder="01/01/2015 - 01/31/2015" type="text"> <span class="input-group-addon"><i class="icon-calender"></i></span> </div>
						</div>
                    <!-- /.col-lg-12 -->
                </div>
               
                <!-- .row -->
                <!-- .row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="white-box">
                            <h3 class="box-title m-b-0">CHIẾN DỊCH ADWORDS & THIẾT BỊ</h3>
                            <p class="text-muted m-b-20">Bạn có thể tạm ngưng toàn bộ chiến dịch hoặc trên các thiết bị chỉ định ngay lập tức nếu phát hiện click tặc quá nhiều. Hoăc bạn có thể <a href="">Cấu Hình Chặn Tự Động</a></p>
                           
							 <div class="table-responsive dataTables_wrapper ">
							
							
                                <table class="table table-striped color-table inverse-table ">
                                    <thead>
								  <tr>
									<th>#</th>
									<th>Chiến dịch</th>
									<th>Chi Phí</th>
									<th>Tác Vụ</th>
									<th>Hiển Thị</th>
									<th>Click</th>
									<th>CPC</th>
									<th>Click/Hiển Thị</th>
									<th>Click Ảo</th>
									<th>% Click Ảo</th>
								  </tr>
								</thead>
								<tbody>
								<!-- mot chien dich -->
								  <tr>
									<td>1</td>
									<td><a href=""><strong>Quảng cáo trên di động</strong></a></td>
									<td>3.200.000</td>
									<td><button class="btn btn-outline btn-success btn-sm adwords-btn-fixwidth" data-toggle="tooltip" data-placement="top" title="" data-original-title="Tạm ngừng chiến dịch này">Ngừng Chiến Dịch</button></td>
									<td>32.000</td>
									<td><span class="text-muted">1.500</span> </td>
									<td>1.000.000</td>
									<td>10%</td>
									<td>1.000</td>
									<td><div class="label label-table label-danger">50%</div></td>
								  </tr>
								   <tr>
								    <td></td>
									<td>Thiết bị - PC</td>
									<td>3.200.000</td>
									<td><button class="btn btn-outline btn-info btn-sm adwords-btn-fixwidth" data-toggle="tooltip" data-placement="top" title="" data-original-title="Ngừng chạy chiến dịch trên PC">Ngừng Trên PC</button></td>
									<td>32.000</td>
									<td><span class="text-muted">1.500</span> </td>
									<td>1.000.000</td>
									<td><div class="label label-table label-danger">20%</div></td>
									<td>1.000</td>
									<td>120%</td>
								  </tr>
								   <tr>
								   <td></td>
									<td>Thiết bị - Mobile</td>
									<td>3.200.000</td>
									<td><button class="btn btn-outline btn-info btn-sm adwords-btn-fixwidth" data-toggle="tooltip" data-placement="top" title="" data-original-title="Ngừng chạy chiến dịch trên Mobile">Ngừng Trên Mobile</button></td>

									<td>32.000</td>
									<td><span class="text-muted">1.500</span> </td>
									<td>1.000.000</td>
									<td>10%</td>
									<td>1.000</td>
									<td>120%</td>
								  </tr>
								  <tr>
								  <td></td>
									<td>Thiết bị - Tablet</td>
									<td>3.200.000</td>
									<td><button class="btn btn-outline btn-info btn-sm adwords-btn-fixwidth" data-toggle="tooltip" data-placement="top" title="" data-original-title="Ngừng chạy chiến dịch trên Tablet">Ngừng Trên Tablet</button></td>
									<td>32.000</td>
									
									<td><span class="text-muted">1.500</span> </td>
									<td>1.000.000</td>
									<td>10%</td>
									<td>1.000</td>
									<td>120%</td>
								  </tr>
								<!-- mot chien dich --> 
								<!-- mot chien dich -->
								  <tr>
									<td>2</td>
									<td><a href=""><strong>Quảng cáo trên di động</strong></a></td>
									<td>3.200.000</td>
									<td><button class="btn btn-success btn-sm adwords-btn-fixwidth" data-toggle="tooltip" data-placement="top" title="" data-original-title="Mở lại chiến dịch này">Mở Chiến Dịch</button></td>
									<td>32.000</td>
									<td><span class="text-muted">1.500</span> </td>
									<td>1.000.000</td>
									<td><div class="label label-table label-danger">50%</div></td>
									<td>1.000</td>
									<td>120%</td>
								  </tr>
								   <tr>
								    <td></td>
									<td>Thiết bị - PC</td>
									<td>3.200.000</td>
									<td><button class="btn btn-info btn-sm adwords-btn-fixwidth" data-toggle="tooltip" data-placement="top" title="" data-original-title="Mở chiến dịch trên PC">Mở Trên PC</button></td>
									<td>32.000</td>
									<td><span class="text-muted">1.500</span> </td>
									<td>1.000.000</td>
									<td>10%</td>
									<td>1.000</td>
									<td>120%</td>
								  </tr>
								   <tr>
								   <td></td>
									<td>Thiết bị - Mobile</td>
									<td>3.200.000</td>
									<td><button class="btn btn-info btn-sm adwords-btn-fixwidth" data-toggle="tooltip" data-placement="top" title="" data-original-title="Mở chiến dịch trên Mobile">Mở Trên Mobile</button></td>

									<td>32.000</td>
									<td><span class="text-muted">1.500</span> </td>
									<td>1.000.000</td>
									<td>10%</td>
									<td>1.000</td>
									<td>120%</td>
								  </tr>
								  <tr>
								  <td></td>
									<td>Thiết bị - Tablet</td>
									<td>3.200.000</td>
									<td><button class="btn btn-info btn-sm adwords-btn-fixwidth" data-toggle="tooltip" data-placement="top" title="" data-original-title="Mở chiến dịch trên Tablet">Mở Trên Tablet</button></td>
									<td>32.000</td>
									
									<td><span class="text-muted">1.500</span> </td>
									<td>1.000.000</td>
									<td>10%</td>
									<td>1.000</td>
									<td>120%</td>
								  </tr>
								<!-- mot chien dich --> 
								<!-- mot chien dich -->
								  <tr>
									<td>3</td>
									<td><a href=""><strong>Quảng cáo trên di động</strong></a></td>
									<td>3.200.000</td>
									<td><button class="btn btn-outline btn-success btn-sm adwords-btn-fixwidth" data-toggle="tooltip" data-placement="top" title="" data-original-title="Tạm ngừng chiến dịch này">Ngừng Chiến Dịch</button></td>
									<td>32.000</td>
									<td><span class="text-muted">1.500</span> </td>
									<td>1.000.000</td>
									<td>10%</td>
									<td>1.000</td>
									<td>120%</td>
								  </tr>
								   <tr>
								    <td></td>
									<td>Thiết bị - PC</td>
									<td>3.200.000</td>
									<td><button class="btn btn-outline btn-info btn-sm adwords-btn-fixwidth" data-toggle="tooltip" data-placement="top" title="" data-original-title="Ngừng chạy chiến dịch trên PC">Ngừng Trên PC</button></td>
									<td>32.000</td>
									<td><span class="text-muted">1.500</span> </td>
									<td>1.000.000</td>
									<td>10%</td>
									<td>1.000</td>
									<td>120%</td>
								  </tr>
								   <tr>
								   <td></td>
									<td>Thiết bị - Mobile</td>
									<td>3.200.000</td>
									<td><button class="btn btn-outline btn-info btn-sm adwords-btn-fixwidth" data-toggle="tooltip" data-placement="top" title="" data-original-title="Ngừng chạy chiến dịch trên Mobile">Ngừng Trên Mobile</button></td>

									<td>32.000</td>
									<td><span class="text-muted">1.500</span> </td>
									<td>1.000.000</td>
									<td>10%</td>
									<td>1.000</td>
									<td>120%</td>
								  </tr>
								  <tr>
								  <td></td>
									<td>Thiết bị - Tablet</td>
									<td>3.200.000</td>
									<td><button class="btn btn-outline btn-info btn-sm adwords-btn-fixwidth" data-toggle="tooltip" data-placement="top" title="" data-original-title="Ngừng chạy chiến dịch trên Tablet">Ngừng Trên Tablet</button></td>
									<td>32.000</td>
									
									<td><span class="text-muted">1.500</span> </td>
									<td>1.000.000</td>
									<td>10%</td>
									<td>1.000</td>
									<td>120%</td>
								  </tr>
								<!-- mot chien dich --> 
								<!-- mot chien dich -->
								  <tr>
									<td>4</td>
									<td><a href=""><strong>Quảng cáo trên di động</strong></a></td>
									<td>3.200.000</td>
									<td><button class="btn btn-success btn-sm adwords-btn-fixwidth" data-toggle="tooltip" data-placement="top" title="" data-original-title="Mở lại chiến dịch này">Mở Chiến Dịch</button></td>
									<td>32.000</td>
									<td><span class="text-muted">1.500</span> </td>
									<td>1.000.000</td>
									<td>10%</td>
									<td>1.000</td>
									<td>120%</td>
								  </tr>
								   <tr>
								    <td></td>
									<td>Thiết bị - PC</td>
									<td>3.200.000</td>
									<td><button class="btn btn-info btn-sm adwords-btn-fixwidth" data-toggle="tooltip" data-placement="top" title="" data-original-title="Ngừng chạy chiến dịch trên PC">Mở Trên PC</button></td>
									<td>32.000</td>
									<td><span class="text-muted">1.500</span> </td>
									<td>1.000.000</td>
									<td>10%</td>
									<td>1.000</td>
									<td>120%</td>
								  </tr>
								   <tr>
								   <td></td>
									<td>Thiết bị - Mobile</td>
									<td>3.200.000</td>
									<td><button class="btn btn-info btn-sm adwords-btn-fixwidth" data-toggle="tooltip" data-placement="top" title="" data-original-title="Ngừng chạy chiến dịch trên Mobile">Mở Trên Mobile</button></td>

									<td>32.000</td>
									<td><span class="text-muted">1.500</span> </td>
									<td>1.000.000</td>
									<td>10%</td>
									<td>1.000</td>
									<td>120%</td>
								  </tr>
								  <tr>
								  <td></td>
									<td>Thiết bị - Tablet</td>
									<td>3.200.000</td>
									<td><button class="btn btn-info btn-sm adwords-btn-fixwidth" data-toggle="tooltip" data-placement="top" title="" data-original-title="Ngừng chạy chiến dịch trên Tablet">Mở Trên Tablet</button></td>
									<td>32.000</td>
									
									<td><span class="text-muted">1.500</span> </td>
									<td>1.000.000</td>
									<td>10%</td>
									<td>1.000</td>
									<td>120%</td>
								  </tr>
								<!-- mot chien dich --> 
								</tbody>
							  </table>
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