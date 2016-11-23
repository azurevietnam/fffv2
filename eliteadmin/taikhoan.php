<? include("./modules/header.php");?>
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
                        <h4 class="page-title">Tài khoản khách hàng</h4> </div>
						<div class="col-lg-6 col-sm-4 col-md-4 col-xs-12"> </div>
						<div class="col-lg-3 col-sm-4 col-md-4 col-xs-12"> 
						
						</div>
                    <!-- /.col-lg-12 -->
                </div>
               
               <!-- .row -->
                <div class="row">
                    <div class="col-sm-12">
                         <div class="white-box">
                            <h3 class="box-title m-b-0">Lịch Sử Thanh Toán</h3>
                            <div class="table-responsive">
                                <table class="table valign-middle">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Ngày Thanh Toán</th>
                                            <th>Ngày Hết Hạn</th>
                                            <th>Domain</th>
                                            <th>Tình Trạng</th>
                                            <th>Thanh toán qua</th>
                                            <th>Số tiền</th>
                                            <th>Gói dịch vụ</th>
                                            <th>Tiện ích gia tăng</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>20/10/2016</td>
                                            <td>20/11/2016</td>
                                            <td>toancau.com</td>
                                            <td><button class="fcbtn btn btn-info btn-outline btn-1e btn-sm">Đã Thanh Toán</button></td>
                                            <td>Ngân hàng VCB </td>
                                            <td>2.000.000</td>
                                            <td>1.500.000</td>
                                            <td>500.000</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>20/11/2016</td>
                                            <td>20/12/2016</td>
                                            <td>toancau.com</td>
                                            <td><button class="fcbtn btn btn-danger btn-outline btn-1e btn-sm">Chưa Thanh Toán</button></td>
                                            <td>Ngân hàng VCB </td>
                                            <td>2.000.000</td>
                                            <td>1.500.000</td>
                                            <td>500.000</td>
                                        </tr>
										<tr>
                                            <td>3</td>
                                            <td>20/12/2016</td>
                                            <td>20/01/2017</td>
                                            <td>toancau.com</td>
                                            <td><button class="fcbtn btn btn-warning btn-outline btn-1e btn-sm">Thanh Toán Ngay</button></td>
                                            <td>Ngân hàng VCB </td>
                                            <td>2.000.000</td>
                                            <td>1.500.000</td>
                                            <td>500.000</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
					
                </div>
                <!-- /.row -->
				
				<div class="row">
				  <div class="col-sm-6">
					  <div class="white-box">
						  <h3 class="box-title">Thông tin khách hàng</h3>
						  <form class="form-material form-horizontal m-t-30">
							  <div class="form-group">
								  <label class="col-md-12" for="example-email">Email</label>
								  <div class="col-md-12">
									  <input type="email" id="example-email" name="example-email" class="form-control" value="info@themedesigner.in">
								  </div>
							  </div>
							 
							  <div class="form-group">
								  <label class="col-md-12" for="example-phone">Mật khẩu</label>
								  <div class="col-md-12">
									  <input type="text" id="example-phone" name="example-phone" class="form-control" value="******">
								  </div>
							  </div>
							  <div class="form-group">
								  <label class="col-md-12" for="example-phone">Mật khẩu mới</label>
								  <div class="col-md-12">
									  <input type="text" id="example-phone" name="example-phone" class="form-control" value="">
								  </div>
							  </div>
							  
							  <div class="form-group">
								  <label class="col-md-12" for="pwd">Địa chỉ</label>
								  <div class="col-md-12">
									  <textarea class="form-control" place-holder="">Lorem ipsum doler set amet dafh adkfhad adlfjadfd adfkhkh</textarea>
								  </div>
							  </div>
							  
							  <button type="submit" class="btn btn-info waves-effect waves-light m-r-10">Cập Nhập Thông Tin</button>
							  
						  </form>
					  </div>
				  </div> 
			  
				  <div class="col-sm-6">
					  <div class="white-box">
						  <h3 class="box-title">Thông tin liên hệ khác</h3>
						  <form class="form-material form-horizontal m-t-30">
							   <div class="form-group">
								  <label class="col-md-12" for="example-phone">Số điện thoại</label>
								  <div class="col-md-12">
									  <input type="text" id="example-phone" name="example-phone" class="form-control" value="(999) 999-9999" data-mask="(999) 999-9999">
								  </div>
							  </div>
							  
							  <div class="form-group">
								  <label class="col-md-12" for="furl">Facebook </label>
								  <div class="col-md-12">
									  <input type="text" id="furl" name="furl" class="form-control" value="http://facebook.com/[facebook-id]">
								  </div>
							  </div>
							  <div class="form-group">
								  <label class="col-md-12" for="turl">Skype</label>
								  <div class="col-md-12">
									  <input type="text" id="turl" name="turl" class="form-control" value="[skype]">
								  </div>
							  </div>
							  <div class="form-group">
								  <label class="col-md-12" for="inurl">Zalo</label>
								  <div class="col-md-12">
									  <input type="text" id="inurl" name="inurl" class="form-control" value="[Zalo]">
								  </div>
							  </div>
							<button type="submit" class="btn btn-info waves-effect waves-light m-r-10">Cập Nhập Thông Tin</button>

						  </form>
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