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
                        <h4 class="page-title">Cấu hình thu thập số điện thoại</h4> </div>
						<div class="col-lg-6 col-sm-4 col-md-4 col-xs-12"> </div>
						<div class="col-lg-3 col-sm-4 col-md-4 col-xs-12"> 
						
						</div>
                    <!-- /.col-lg-12 -->
                </div>
               
               <!-- .row -->
                <div class="row">
                    <div class="col-sm-12">
                         <div class="white-box">
                            <h3 class="box-title m-b-0">THỰC HIỆN THU THẬP SỐ ĐIỆN THOẠI KHI</h3>
                            <p class="text-muted m-b-30 font-13">
								Hệ thống hỗ trợ thu thập số điện thoại của 3 nhà mạng: Viettel, Mobile, Vina. <br>
								Thu thập số điện thoại chỉ có thể thực hiện khi khách hàng truy cập bằng Mobile.								
							</p>
							
                            <form class="form-horizontal">
                                <div class="form-group">
                                    <label class="col-sm-3">Số trang khách hàng đã xem</label>
                                    <div class="col-sm-9">
                                        <select class="form-control">
                                            <option>Không quan tâm</option>
                                            <option>Sau khi xem 1 trang</option>
                                            <option>Sau khi xem 2 trang</option>
                                            <option>Sau khi xem 3 trang</option>
                                            <option>Sau khi xem 4 trang</option>
                                          
                                            
                                        </select>
                                    </div>
                                </div>
								<div class="form-group">
								 <label class="col-sm-12">Hoặc chỉ thu thập khi khách hàng xem các trang sau</label>
									<div class="col-md-12">
										<textarea class="form-control" rows="5" placeholder="Lưu mỗi URL trên 1 dòng."></textarea>
									</div>
								</div>
                            </form>
							<button type="submit" class="btn btn-info waves-effect waves-light m-r-10">Lưu & Thu Thập Số Điện Thoại</button>
                        </div>
						 
						
						
                    </div>
					
                </div>
                <!-- /.row -->
                
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
		
		<script src="../plugins/bower_components/summernote/dist/summernote.min.js"></script>
    <script>
        jQuery(document).ready(function () {
            $('.summernote').summernote({
                height: 350, // set editor height
                minHeight: null, // set minimum height of editor
                maxHeight: null, // set maximum height of editor
                focus: false // set focus to editable area after initializing summernote
            });
            $('.inline-editor').summernote({
                airMode: true,
            });
        });
        window.edit = function () {
            $(".click2edit").summernote()
        }, window.save = function () {
            $(".click2edit").destroy()
        }
    </script>
  <? include("modules/footer.php");?>