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
                        <h4 class="page-title">Cấu hình chat box</h4> </div>
						<div class="col-lg-6 col-sm-4 col-md-4 col-xs-12"> </div>
						<div class="col-lg-3 col-sm-4 col-md-4 col-xs-12"> 
						
						</div>
                    <!-- /.col-lg-12 -->
                </div>
               
               <!-- .row -->
                <div class="row">
                    <div class="col-sm-8">
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
                            <h3 class="box-title m-b-0">Chuẩn bị chat với khách hàng</h3>
                            <p class="text-muted m-b-30 font-13"> Nội dung mặc định khi chuẩn bị chat với khách hàng</p>
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
					<div class="col-sm-4">
					
						<div class="panel panel-default pannel-chatbox">
                            <div class="panel-heading pannel-chatbox-heading">
								<i class="fa fa-sliders colorpicker change-color" value="#fbfafd"></i>

								<input type="text" value="Bạn cần hỗ trợ - Chat ngay" class="pannel-chatbox-input">
								<div class="panel-action"><a href="#" data-perform="panel-dismiss"><i class="ti-close"></i></a></div>
							</div>
                            <div class="panel-wrapper collapse in">
                                <div class="panel-body pannel-chatbox-body">
                                    <img src="./images/chat-agent.png" alt="alert" class="chat-agent-image" id="sa-image">
									<textarea class="pannel-chatbox-body-textarea">Vui lòng nhập nội dung vào ô bên dưới</textarea>
                                </div>
                                <div class="panel-footer pannel-chatbox-footer">
									<div class="chat-input-box">Message ...</div>
								</div>
                            </div>
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
  <? include("modules/footer.php");?>