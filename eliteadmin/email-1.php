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
                        <h4 class="page-title">Gửi email cho khách hàng</h4> </div>
						<div class="col-lg-6 col-sm-4 col-md-4 col-xs-12"> </div>
						<div class="col-lg-3 col-sm-4 col-md-4 col-xs-12"> 
						
						</div>
                    <!-- /.col-lg-12 -->
                </div>
               
               <!-- .row -->
			     <div class="row">
                    <div class="col-sm-12">
					 <div class="white-box">
							<h3 class="box-title">Soạn thảo nội dung gửi khách hàng</h3>
							
							<div class="form-group">
							  <input class="form-control" placeholder="Tiêu đề email:">
							</div>
							<div class="form-group">
							  <div class="summernote">
								  <p>Nội dung email</p>
								</div>
							</div>
							<div class="form-group">
							  <input class="form-control" placeholder="Người nhận test:">
							</div>
							<button type="submit" class="btn btn-primary"><i class="fa fa-envelope-o"></i> Gửi bản test</button>
						</div>
				</div>
			  </div>
			  
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title m-b-0">Gửi Email Này Đến</h3>
                            <p class="text-muted font-13"> Tùy chọn này sẽ gửi email hàng loạt đến khách hàng của bạn. Vui lòng test email trước khi gửi</p>
                            <form class="form-horizontal">
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <div class="checkbox checkbox-info">
                                            <input id="checkbox33" type="checkbox">
                                            <label for="checkbox33">Tất cả khách hàng của tôi</label>
                                        </div>
                                    </div>
									
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <div class="checkbox checkbox-info">
                                            <input id="checkbox34" type="checkbox">
                                            <label for="checkbox34">Kiểm tra khách hàng mở email</label>
                                        </div>
                                    </div>
									
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <div class="checkbox checkbox-info">
                                            <input id="checkbox35" type="checkbox">
                                            <label for="checkbox35">Kiểm tra khách hàng click vào liên kết</label>
                                        </div>
                                    </div>
									
                                </div>
                                
								<button type="submit" class="btn btn-info"><i class="fa fa-envelope-o"></i> Gửi email marketing</button>
                            </form>
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
   
    jQuery(document).ready(function(){

        $('.summernote').summernote({
            height: 350,                 // set editor height
            minHeight: null,             // set minimum height of editor
            maxHeight: null,             // set maximum height of editor
            focus: false                 // set focus to editable area after initializing summernote
        });
        
     

   });
   
 
</script>
  <? include("modules/footer.php");?>