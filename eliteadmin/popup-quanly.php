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
                        <h4 class="page-title">DANH SÁCH POPUP</h4> </div>
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
							
                            <div class="table-responsive dataTables_wrapper ">
                                <table class="table color-table inverse-table">
                                    <thead>
                                        <tr>
                                            <th>Stt</th>
                                            
                                            <th>Tiêu đề</th>
                                            <th>Ngày tạo</th>
                                            <th>Tác Vụ</th>
                                            <th>Số khách hàng</th>
                                           
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                           
											 <td><a href="edit.php">TIÊU ĐỀ CỦA POPUP</a></td>
											 <td>10h20 20/10/2016</td>
											 <td><button class="btn  btn-danger btn-sm " >Ngừng Hoạt Động</button></td>
                                            <td>30,000</td>
											
                                            
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