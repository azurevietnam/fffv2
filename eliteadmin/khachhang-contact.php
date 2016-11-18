<?
 include("./modules/header.php");
 include("./api/facebook_api.php");
 $fid = "100007997651145";//gia dinh co facebook của KH
 $cover = get_facebook_cover($fid);
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
                        <h4 class="page-title">Thông tin khách hàng</h4> </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> 
                        <ol class="breadcrumb">
                            <li><a href="#">Dashboard</a></li>
                            <li><a href="#">Khách hàng</a></li>
                            <li class="active">Thông tin khách hàng</li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
                <!-- .row -->
                <div class="row">
                    <div class="col-md-3 col-xs-12">
                        <div class="white-box">
                            <div class="user-bg"> <img width="100%" alt="user" src="<?=$cover?>"> </div>
                            <div class="user-btm-box">
                                <!-- .row -->
                                <div class="row text-center m-t-10">
                                    <div class="col-md-6 b-r"><strong>Họ & Tên</strong>
                                        <p>Nguyễn Văn Dũng</p>
                                    </div>
                                    <div class="col-md-6"><strong>Số điện thoại</strong>
                                        <p>0985 668 668</p>
                                    </div>
                                </div>
                                <!-- /.row -->
                                <hr>
                                <!-- .row -->
                                <div class="row text-center m-t-10">
                                    <div class="col-md-6 b-r"><strong>Email ID</strong>
                                        <p>info@gmail.com</p>
                                    </div>
                                    <div class="col-md-6"><strong>Skype</strong>
                                        <p>gauconxinhdep</p>
                                    </div>
                                </div>
                                <!-- /.row -->
                                <hr>
                                <!-- .row -->
                                <div class="row text-center m-t-10">
                                    <div class="col-md-12"><strong>Địa Chỉ</strong>
                                        <p>201 Nguyễn Văn Quá, <strong><a href="">Hồ Chí Minh</a></strong>, <strong><a href="">Việt Nam</a></strong></p>
                                       
                                    </div>
                                </div>
                                <hr>
                                <!-- /.row -->
                                <div class="col-md-4 col-sm-4 text-center">
                                    <p class="text-purple"><i class="ti-facebook"></i></p>
                                    <h1>258</h1> </div>
                                <div class="col-md-4 col-sm-4 text-center">
                                    <p class="text-blue"><i class="ti-twitter"></i></p>
                                    <h1>125</h1> </div>
                                <div class="col-md-4 col-sm-4 text-center">
                                    <p class="text-danger"><i class="ti-dribbble"></i></p>
                                    <h1>556</h1> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9 col-xs-12">
					 <!-- .row -->
					  <div class="row">
						<div class="col-sm-12">
						  <div class="white-box">
							<form method="post">
							  <div class="form-group">
								<textarea class="textarea_editor form-control" rows="5" placeholder="Ghi chú khách hàng ..."></textarea>
							  </div>
							 <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Submit</button>
							</form>
						  </div>
						</div>
					  </div>
					  <!-- /.row -->
					
                        <div class="white-box">
                            
                            <!-- /.tabs -->
                            <div class="tab-content">
                                <!-- .tabs 1 -->
								
                                <div class="tab-pane active" id="home">
								
	
	  
                                    <div class="steamline">
                                         <div class="sl-item">
                                            <div class="sl-left"> <img src="./images/icon/shopping-cart.png" alt="user" class="img-circle" /> </div>
                                            <div class="sl-right">
                                                <div class="m-l-40"><a href="#" class="text-info">Mua Sản Phẩm</a> <span class="sl-date">5 minutes ago</span>
                                                    <p><a href="">Đăng ký sử dụng 1 tháng dịch vụ chặn click tặc</a></p>
                                                    <div class="m-t-20 row">
                                                        <div class="col-md-12 col-xs-12">
                                                            <p>Đăng ký sử dụng dịch vụ chặn click tặc. <br>
															Số tiền: 1.200.000 vnd
															</p>
														</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
										
										<div class="sl-item">
                                            <div class="sl-left"> <img src="./images/icon/laptop.png" alt="user" class="img-circle" /> </div>
                                            <div class="sl-right">
                                                <div class="m-l-40"><a href="#" class="text-info">Xem website</a> <span class="sl-date">5 minutes ago</span>
                                                    <p><a href="">Bạn Có Đang Bị Đối Thủ Phá Quảng Cáo Adwords?</a></p>
                                                    <div class="m-t-20 row">
                                                        <div class="col-md-3 col-xs-12"><img src="http://fff.com.vn/wp-content/uploads/2016/08/555555.PNG.png" alt="user" class="img-responsive" /></div>
                                                        <div class="col-md-9 col-xs-12">
                                                            <p>Các bạn đã vào tới đây và xem bài viết này hẳn các bạn đã chạy adwords cho dịch vụ của mình và rất đang có thể bị đối thủ của mình click tặc ( còn gọi click ảo). Sau đây 3F Solutions sẽ hướng dẫn các bạn để biết các bạn có đang bị  click tặc hay không.
															</p>
														</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="sl-item">
                                            <div class="sl-left"> <img src="./images/icon/mobile.png" alt="user" class="img-circle" /> </div>
                                            <div class="sl-right">
                                                <div class="m-l-40"><a href="#" class="text-info">Xem website</a> <span class="sl-date">5 minutes ago</span>
                                                    <p><a href="">Bạn Có Đang Bị Đối Thủ Phá Quảng Cáo Adwords?</a></p>
                                                    <div class="m-t-20 row">
                                                        <div class="col-md-3 col-xs-12"><img src="http://fff.com.vn/wp-content/uploads/2016/08/555555.PNG.png" alt="user" class="img-responsive" /></div>
                                                        <div class="col-md-9 col-xs-12">
                                                            <p>Các bạn đã vào tới đây và xem bài viết này hẳn các bạn đã chạy adwords cho dịch vụ của mình và rất đang có thể bị đối thủ của mình click tặc ( còn gọi click ảo). Sau đây 3F Solutions sẽ hướng dẫn các bạn để biết các bạn có đang bị  click tặc hay không.
															</p>
														</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
										<div class="sl-item">
                                            <div class="sl-left"> <img src="./images/icon/email.png" alt="user" class="img-circle" /> </div>
                                            <div class="sl-right">
                                                <div class="m-l-40"><a href="#" class="text-info">Mở Email</a> <span class="sl-date">18:00 - 20/10/2016</span>
                                                    <p><a href="">Tại sao bạn lại quan tâm đến dịch vụ quảng cáo adwords</a></p>
                                                    <div class="m-t-20 row">
                                                        <div class="col-md-12 col-xs-12">
                                                            <p>
																Mở email và bấm vào <a href="">liên kết </a>
															</p>
														</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
										<div class="sl-item">
                                            <div class="sl-left"> <img src="./images/icon/chat.png" alt="user" class="img-circle" /> </div>
                                            <div class="sl-right">
                                                <div class="m-l-40"><a href="#" class="text-info">Chat với nhân viên hỗ trợ</a> <span class="sl-date">20:00 - 21/10/2016</span>
                                                    <div class="m-t-20 row">
                                                        <div class="col-md-12 col-xs-12">
                                                           <p>
																<p><span class="khachhang">Nguyễn Văn Dũng</span> Xin chào</p>
																<p><span class="agent">Nhân viên Hồ Thu Thảo</span> Xin chào</p>
																<p><span class="khachhang">Nguyễn Văn Dũng</span> Tôi cần giúp đỡ về dịch vụ chặn click ảo</p>
																<p><span class="agent">Nhân viên Hồ Thu Thảo</span> Vâng bạn cần trợ giúp gì ạ</p>
																<div class="col-lg-12 col-sm-12 col-xs-12 text-center"><button class="btn btn-outline btn-rounded btn-info" style="width:25%">Xem đầy đủ</button></div>
															<p>
															
															
														</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.tabs1 -->
                               
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
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