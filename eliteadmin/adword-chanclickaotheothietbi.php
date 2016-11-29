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
							
                                <table   id="myTable" class="table table-striped color-table info-table " data-page-length='50'>
                                    <thead>
								  <tr>
									<th>Chiến dịch</th>
									<th>Thiết bị</th>
									<th>Hiển Thị</th>
									<th>Click</th>
									<th>CPC</th>
									<th>Click/Hiển Thị</th>
									<th>Click Ảo</th>
									<th>% Click Ảo</th>
									<th>Chi Phí</th>
									<th>Tác Vụ</th>
									
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
				"ajax": 'http://adwords.fff.com.vn/campaign-get-listcampaign.php?adword=<?=$_GET['adword']?>',
				"order": [[ 7, "DESC" ]]
			});
			
			$('#myTable').on('click', '.btn-adword-campain-action', function() {
				  var device = $(this).data( "device");
				  var camp_id = $(this).data( "campaign");
				  var adword = $(this).data( "adword");
				  var status = $(this).data( "status");
				  
				  if (status == "ENABLE"){
						$(this).removeClass("btn-info");
						$(this).addClass("btn-danger");
				  }else{
					  $(this).removeClass("btn-danger");
					  $(this).addClass("btn-info");
				  }
						
				  $.ajax({
						method: "POST",
						dataType: "json",
						url: "http://adwords.fff.com.vn/campaign-change-bid.php",
						data: { device: device, camp_id : camp_id, adword: adword, status:status }
					}).done(function( data ) {
						
					});
				 
			});
	
			
        });
    </script>
  <? include("modules/footer.php");?>