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
                        <h4 class="page-title">NHU CẦU TÌM KIẾM</h4> </div>
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
                            <h3 class="box-title m-b-0">NHU CẦU TÌM KIẾM & TỪ KHÓA CỦA BẠN</h3>
                            <p class="text-muted m-b-20">Nhu cầu tìm kiếm là căn cứ tốt nhất khi tiến hành tối ưu hóa chiến dịch quảng cáo Adwords</a></p>
                           
							 <div class="table-responsive dataTables_wrapper ">
								<div class="table-responsive">
                                <table id="myTable" class="table table-striped" data-page-length='50'>
                                    <thead>
                                        <tr>
                                            
                                            
                                            <th>Từ khóa tìm kiếm</th>
                                            <th>Từ khóa của bạn</th>
											<th>Thiết bị</th>
											<th>Hiển thị</th>
											<th>Clicks</th>
                                            <th>Chi phí</th>
                                            <th>CPC</th>
                                            <th>Vị trí</th>
                                            <th>CTR</th>
											<th>Nhóm quảng cáo</th>
											<th>Chiến dịch</th>
                                           
                                            
                                          
                                        </tr>
                                    </thead>
                                    <tbody>
                                       
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
		
		 <script>
        $(document).ready(function () {
     		$('#myTable').DataTable( {
				"ajax": 'http://adwords.fff.com.vn/keywords-list-searchterms.php?adword=<?=$_GET['adword']?>',
				"order": [[ 3, "desc" ]]
			});
        });

    </script>
  <? include("modules/footer.php");?>