<? include("./modules/header.php");?>
<body>
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
                        <h4 class="page-title">BÁO CÁO TỔNG QUÁT</h4> </div>
						<div class="col-lg-6 col-sm-4 col-md-4 col-xs-12"> </div>
						<div class="col-lg-3 col-sm-4 col-md-4 col-xs-12"> 
							<div class="input-group"><input class="form-control input-daterange-datepicker " id="input-daterange-datepicke" placeholder="01/01/2015 - 01/31/2015" type="text"> <span class="input-group-addon"><i class="icon-calender"></i></span> </div>
						</div>
                    <!-- /.col-lg-12 -->
                </div>
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
				  <div class="row">
					<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
					  <div class="white-box">
						<h3 class="box-title">Realtime Traffic</h3>
						
						<div id="basic_bars" style="height: 340px;"></div>
					  </div>
					</div>
					
					
				  </div>
				  <!--row -->
				  
				  <!--row -->
				  <div class="row">
					<div class="col-md-7 col-lg-8 col-sm-12 col-xs-12">
					  <div class="white-box">
						<h3 class="box-title">Product Sales</h3>
						<div id="customer_2" style="height: 400px;"></div>
					  </div>
					</div>
				   <div class="col-md-5 col-lg-4 col-sm-12 col-xs-12">
					  <div class="white-box">
						  <h3 class="box-title">TÌNH TRẠNG KHÁCH HÀNG</h3>
						  <div id="customer_1" class="ecomm-donute" style="height: 400px;"></div>
						  
					  </div>
				   </div>         
				  </div>
				  <!-- row -->
				  
				  
                <!-- /.row -->
                
                <!--row -->
                <div class="row">
                    <div class="col-md-4 col-lg-4 col-xs-12">
                        <div class="white-box">
                            <h3 class="box-title">TRÌNH DUYỆT</h3>
                            <ul class="basic-list">
                                <li>Google Chrome <span class="pull-right label-danger label">21.8%</span></li>
                                <li>Mozila Firefox <span class="pull-right label-purple label">21.8%</span></li>
                                <li>Apple Safari <span class="pull-right label-success label">21.8%</span></li>
                                <li>Internet Explorer <span class="pull-right label-info label">21.8%</span></li>
                                <li>Opera mini <span class="pull-right label-warning label">21.8%</span></li>
                                <li>Mozila Firefox <span class="pull-right label-purple label">21.8%</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4 col-xs-12">
                        <div class="white-box">
                            <h3 class="box-title">Real Time Visitor</h3>
                            <div class="stats-row">
                                <div class="stat-item">
                                    <h6>PC</h6> <b>60</b></div>
                                <div class="stat-item">
                                    <h6>Mobile</h6> <b>320</b></div>
                                <div class="stat-item">
                                    <h6>Tablet</h6> <b>50</b></div>
                            </div>
                            <div style="height: 280px;">
                                <div id="placeholder" class="demo-placeholder"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4 col-xs-12">
                        <div class="white-box">
                            <div class="user-bg"> <img src="../plugins/images/large/img1.jpg" alt="user" style="100%">
                                <div class="overlay-box">
                                    <div class="user-content">
                                        <a href="javascript:void(0)"><img alt="img" class="thumb-lg img-circle" src="../plugins/images/users/genu.jpg"></a>
                                        <h4 class="text-white">Nguyễn Văn A</h4>
                                        <h5 class="text-white">info@myadmin.com</h5> </div>
                                </div>
                            </div>
                            <div class="user-btm-box">
                                <div class="col-md-4 col-sm-4 text-center">
                                    <p class="text-purple"><i class="ti-facebook"></i></p>
                                    <h1>258</h1> </div>
                                <div class="col-md-4 col-sm-4 text-center">
                                    <p class="text-blue"><i class="ti-twitter"></i></p>
                                    <h1>125</h1> </div>
                                <div class="col-md-4 col-sm-4 text-center">
                                    <p class="text-danger"><i class="ti-dribbble"></i></p>
                                    <h1>556</h1> </div>
                                <div class="stats-row col-md-12 m-t-20 m-b-0 text-center">
                                    <div class="stat-item">
                                        <h6>Contact info</h6> <b><i class="ti-mobile"></i> 123-456-7890</b></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- row -->
                    <!-- /.row -->
                    <!-- .right-sidebar -->
                   
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