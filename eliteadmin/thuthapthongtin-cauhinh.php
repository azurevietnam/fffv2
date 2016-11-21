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
                        <h4 class="page-title">Cấu hình thu thập thông tin</h4> </div>
						<div class="col-lg-6 col-sm-4 col-md-4 col-xs-12"> </div>
						<div class="col-lg-3 col-sm-4 col-md-4 col-xs-12"> 
						
						</div>
                    <!-- /.col-lg-12 -->
                </div>
               
               <!-- .row -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title m-b-0">Thông tin cần khách hàng cung cấp</h3>
                            <p class="text-muted m-b-30 font-13"> Thông tin cần thiết để bắt đầu Chat </p>
                            <form class="form-horizontal">
                                <div class="form-group border-1px-ccc">
                                    <div class="col-sm-4">
                                        <div class="checkbox checkbox-info">
                                            <input id="checkbox33" type="checkbox">
                                            <label for="checkbox33">Họ & Tên khách hàng</label>
                                        </div>
                                    </div>
									<div class="col-sm-4">
                                        <div class="checkbox checkbox-info">
                                            <input id="checkbox34" type="checkbox">
                                            <label for="checkbox34">Bắt buộc cung cấp</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group border-1px-ccc">
                                    <div class="col-sm-4">
                                        <div class="checkbox checkbox-info">
                                            <input id="checkbox35" type="checkbox">
                                            <label for="checkbox35">Email khách hàng</label>
                                        </div>
                                    </div>
									<div class="col-sm-4">
                                        <div class="checkbox checkbox-info">
                                            <input id="checkbox36" type="checkbox">
                                            <label for="checkbox36">Bắt buộc cung cấp</label>
                                        </div>
                                    </div>
                                </div>
								 <div class="form-group border-1px-ccc">
                                    <div class="col-sm-4">
                                        <div class="checkbox checkbox-info">
                                            <input id="checkbox37" type="checkbox">
                                            <label for="checkbox37">Số điện thoại</label>
                                        </div>
                                    </div>
									<div class="col-sm-4">
                                        <div class="checkbox checkbox-info">
                                            <input id="checkbox38" type="checkbox">
                                            <label for="checkbox38">Bắt buộc cung cấp</label>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
						 <div class="white-box">
                            <h3 class="box-title m-b-0">Hộp thoại xuất hiện khi thu thập thông tin</h3>
                            <p class="text-muted m-b-30 font-13">Bấm vào nội dung để chỉnh sửa theo ý thích của bạn</p>
								<div class="row">
									<div class="col-md-6">
										<div class="white-box color-blue box-cauhinh-popup">
										<div class="pull-right"><a href="#" data-perform="panel-dismiss"><i class="ti-close"></i></a> </div>
											<h3 class="box-title m-b-0 inline-editor">Quà tặng miễn phí</h3>
											<p class="text-muted m-b-30 font-13 inline-editor"> Vui lòng để lại thông tin để nhận ngay phần quà trị giá <strong class="text-info">100.000 vnd</strong></p>
											<form class="form-horizontal">
												<div class="form-group">
													<label for="exampleInputuname" class="col-sm-3 control-label">Họ & Tên *</label>
													<div class="col-sm-9">
														<div class="input-group">
															<div class="input-group-addon"><i class="ti-user"></i></div>
															<input type="text" class="form-control" id="exampleInputuname" placeholder="Họ và Tên"> </div>
													</div>
												</div>
												<div class="form-group">
													<label for="exampleInputEmail1" class="col-sm-3 control-label">Số điện thoại *</label>
													<div class="col-sm-9">
														<div class="input-group">
															<div class="input-group-addon"><i class="fa fa-phone"></i></div>
															<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Số điện thoại"> </div>
													</div>
												</div>
												<div class="form-group">
													<label for="exampleInputEmail1" class="col-sm-3 control-label">Số điện thoại *</label>
													<div class="col-sm-9">
														<div class="input-group">
															<div class="input-group-addon"><i class="ti-email"></i></div>
															<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email"> </div>
													</div>
												</div>
												<p class="text-muted font-13 inline-editor"> Nhân viên của chúng tôi sẽ gọi điện cho bạn ngay khi nhận được thông tin này</p>

												<div class="form-group m-b-0">
													<div class="col-sm-offset-3 col-sm-9">
														<button type="submit" class="btn btn-info waves-effect waves-light m-t-10">Đăng Ký Nhận Thông Tin</button>
													</div>
												</div>
											</form>
										</div>
									</div>
									<div class="col-md-6">
										<iframe width="560" height="400" src="https://www.youtube.com/embed/LDwKagibyxs" frameborder="0" allowfullscreen></iframe>
									</div>
									
								</div>
								
                        </div> 
						
						<div class="white-box">
                            <h3 class="box-title m-b-0">Nội dung</h3>
                            <p class="text-muted m-b-30 font-13"> Nội dung xuất hiện sau khi thu thập thông tin</p>
                            <form class="form-horizontal">
                                <div class="form-group">
									<div class="col-sm-6 col-xs-12">
										<label class="col-md-12">Trước khi chat</label>
										<div class="col-md-12">
											<textarea class="form-control" rows="5" placeholder="Ví dụ: Vui lòng cung cấp thông tin của bạn"></textarea>
										</div>
									</div>
									<div class="col-sm-6 col-xs-12">
										<label class="col-md-12">Sau khi khách hàng cung cấp thông tin</label>
										<div class="col-md-12">
											<textarea class="form-control" rows="5" placeholder="Ví dụ: Cảm ơn bạn. Tôi có thể giúp gì cho bạn"></textarea>
										</div>
									</div>
                                </div>
								 <div class="form-group">
									<div class="col-sm-6 col-xs-12">
										<label class="col-md-12">Khi bạn không online</label>
										<div class="col-md-12">
											<textarea class="form-control" rows="5" placeholder="Ví dụ: Xin lỗi tôi không online, tôi sẽ liên hệ qua email của bạn nhé"></textarea>
										</div>
									</div>
									<div class="col-sm-6 col-xs-12">
										<label class="col-md-12">Khi bạn đang bận (60s sau khi khách hàng hỏi)</label>
										<div class="col-md-12">
											<textarea class="form-control" rows="5" placeholder="Ví dụ: Xin bạn chờ trong giây lát, các hỗ trợ viên đều đang bận"></textarea>
										</div>
									</div>
                                </div>
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