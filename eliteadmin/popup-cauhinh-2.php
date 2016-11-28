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
								<div class="row">
									<div class="col-md-12">
										<div class="white-box color-blue box-cauhinh-popup">
											<div class="pull-right"><a href="#" data-perform="panel-dismiss"><i class="ti-close"></i></a> </div>
											<h3 class="box-title m-b-0 text-center" style="color:#ff0000">Quà tặng miễn phí</h3>
											<p class="text-muted m-b-30 font-13  text-center"> Vui lòng để lại thông tin để nhận ngay phần quà trị giá 100.000 vnd</p>
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
												<p class="text-muted font-13 text-center" style="color:#03a9f3"> Nhân viên của chúng tôi sẽ gọi điện cho bạn ngay khi nhận được thông tin này</p>

												<div class="form-group m-b-0">
													<div class="text-center">
														<button type="submit" class="btn btn-info waves-effect waves-light m-t-10">Click để được gọi lại!</button>
													</div>
												</div>
											</form>
										</div>
									</div>
									
									
									
								</div>
								
                        </div> 
						
						<div class="white-box">
                            <h3 class="box-title m-b-0">Thông tin cần khách hàng cung cấp</h3>
                            <p class="text-muted m-b-30 font-13"> Thông tin cần thiết để bắt đầu Chat </p>
                            <form class="form-horizontal">
								<div class="form-group">
									<label class="col-md-12">Nội dung & màu chữ dòng header. <span class="help"> Ví dụ: "QUÀ TẶNG MIỄN PHÍ"</span></label>
									<div class="col-md-9">
										<input type="text" id="popup-header-text" class="form-control" value="QUÀ TẶNG MIỄN PHÍ"> 
									</div>
									<div class="col-md-3">
										<input type="text" id="popup-header-color" class="complex-colorpicker form-control" value="#ff0000" />
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-12">Nội dung & màu chữ dòng giới thiệu.</label>
									<div class="col-md-9">
										<input type="text" class="form-control" id="popup-des-text" value="Vui lòng để lại thông tin để nhận ngay phần quà trị giá 100.000 vnd"> </div>
									<div class="col-md-3">
										<input type="text" class="complex-colorpicker form-control" id="popup-des-color" value="#000000" />
									</div>
								</div>
								<h5 class="text-info">Thông tin cần khách hàng cung cấp</h5>
                                <div class="form-group border-1px-ccc">
                                    <div class="col-sm-12">
                                        <div class="checkbox checkbox-info">
                                            <input id="pop-checkbox-hoten" type="checkbox" checked>
                                            <label for="pop-checkbox-hoten">Họ & Tên khách hàng</label>
                                        </div>
                                    </div>
									
                                </div>
                                <div class="form-group border-1px-ccc">
                                     <div class="col-sm-12">
                                        <div class="checkbox checkbox-info">
                                            <input id="pop-checkbox-email" type="checkbox" checked>
                                            <label for="pop-checkbox-email">Email khách hàng</label>
                                        </div>
                                    </div>
									
                                </div>
								 <div class="form-group border-1px-ccc">
                                     <div class="col-sm-12">
                                        <div class="checkbox checkbox-info">
                                            <input id="pop-checkbox-sodienthoai" type="checkbox" checked>
                                            <label for="pop-checkbox-sodienthoai">Số điện thoại</label>
                                        </div>
                                    </div>
									
                                </div>
								<div class="form-group">
									<label class="col-md-12">Nội dung dòng footer</label>
									<div class="col-md-9">
										<input type="text" id="popup-footer-text" class="form-control" value="Nhân viên của chúng tôi sẽ gọi điện cho bạn ngay khi nhận được thông tin này"> </div>
									<div class="col-md-3">
										<input type="text" id="popup-footer-color" class="complex-colorpicker form-control" value="#03a9f3" />
									</div>
								</div>
								<div class="form-group">
									
									<div class="col-md-6">
										<label>Nội dung & Chữ nút bấm</label>
										<input type="text" class="form-control" id="popup-submit-text" value="Click để được gọi lại!"> </div>
									<div class="col-md-3">
										<div style="display:block;padding-bottom:5px;">Màu nền</div>
										<input type="text" class="complex-colorpicker form-control"  id="popup-submit-color" value="#03a9f3" />
									</div>
									<div class="col-md-3">
										<div style="display:block;padding-bottom:5px;">Màu chữ</div>
										<input type="text" class="complex-colorpicker form-control"  id="popup-submit-text-color" value="#ffffff" />
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-12">Màu nền của popup</label>
									<div class="col-md-3">
										<input type="text" class="complex-colorpicker form-control"  id="popup-background-color" value="#ffffff" />
									</div>
								</div>
								
								<div class="form-group border-top-1px">
								
									<button onclick="preview_fff_pop();return false;" class="btn btn-info waves-effect waves-light m-t-10"><i class="fa fa-eye"></i> Kiểm Tra Thử</button>
								
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
		
 <!-- Color Picker Plugin JavaScript -->
    <script src="../plugins/bower_components/jquery-asColorPicker-master/libs/jquery-asColor.js"></script>
    <script src="../plugins/bower_components/jquery-asColorPicker-master/libs/jquery-asGradient.js"></script>
    <script src="../plugins/bower_components/jquery-asColorPicker-master/dist/jquery-asColorPicker.min.js"></script>
	<script>
		$(".complex-colorpicker").asColorPicker({
            mode: 'complex'
        });
	function closealopopup(){
		document.getElementById("fff-modal-pop-wrapper").style.display = "none";
	}
	function preview_fff_pop(){
		var popup_header_text = $("#popup-header-text").val();
		var popup_header_color = $("#popup-header-color").val()
		var popup_des_text = $("#popup-des-text").val();
		var popup_des_color = $("#popup-des-color").val();
		if ($("#pop-checkbox-hoten").prop('checked')) pop_checkbox_hoten = 1; else  pop_checkbox_hoten = 0; 
		if ($("#pop-checkbox-email").prop('checked')) pop_checkbox_email = 1; else  pop_checkbox_email = 0; 
		if ($("#pop-checkbox-sodienthoai").prop('checked')) pop_checkbox_sodienthoai = 1; else  pop_checkbox_sodienthoai = 0; 
		

		var popup_footer_text = $("#popup-footer-text").val();
		var popup_footer_color = $("#popup-footer-color").val();
		var popup_submit_text = $("#popup-submit-text").val();
		var popup_submit_color = $("#popup-submit-color").val();
		var popup_submit_text_color = $("#popup-submit-text-color").val();
		var popup_background_color = $("#popup-background-color").val();

		write_fff_pop(popup_header_text,popup_header_color,popup_des_text,popup_des_color, pop_checkbox_hoten, pop_checkbox_email, pop_checkbox_sodienthoai, popup_footer_text, popup_footer_color, popup_submit_text, popup_submit_color,popup_submit_text_color, popup_background_color);
	}
    function write_fff_pop(popup_header_text,popup_header_color,popup_des_text,popup_des_color, pop_checkbox_hoten, pop_checkbox_email, pop_checkbox_sodienthoai, popup_footer_text, popup_footer_color, popup_submit_text, popup_submit_color,popup_submit_text_color, popup_background_color){
	
	if (pop_checkbox_hoten) popup_input_hoten = '<input type="text" class="fff-modal-pop-number" placeholder="Họ & Tên" name="fff-modal-pop-phone-number">'; else popup_input_hoten = '';
	if (pop_checkbox_email) popup_input_email = '<input type="text" class="fff-modal-pop-number" placeholder="Email liên hệ" name="fff-modal-pop-phone-number">'; else popup_input_email ='';
	if (pop_checkbox_sodienthoai) popup_input_sodt = '<input type="text" class="fff-modal-pop-number" placeholder="0999-999-9999" name="fff-modal-pop-phone-number">'; else popup_input_sodt = '';
	
	var popup_fff_content_show = '<style> #fff-modal-pop-wrapper {     position: absolute;     width: 100%;     bottom: 0;     top: 0;     left: 0;     z-index: 2000000;     overflow: visible;     display: block;     color: #383838; font-family:Arial;	 } #fff-modal-pop-wrapper .fff-modal-pop-overlay {     position: fixed;     width: 100%;     height: 100%;     background:rgba(204,204,204,0.8);     top: 0%;     left: 0%;     z-index: 200000; } #fff-modal-pop-wrapper .fff-modal-pop-table {     display: table;     width: 100%;     height: 100%;     position: fixed;     top: 0; 	left:0;      z-index: 999999; } #fff-modal-pop-wrapper .fff-modal-pop-cell {     display: table-cell;     vertical-align: middle;     text-align: center; } #fff-modal-pop-wrapper .fff-modal-pop-popup { 	transform-origin:0 0; 	transition-timing-function:step-start; 	transition-duration:0.2; 	-webkit-transition-duration:0.2; 	-o-transition-duration:0.2; 	-moz-transition-duration:0.2; 	-ms-transition-duration:0.2; 	display:inline-block; 	position:relative; 	-webkit-border-radius:5px; 	-moz-border-radius:5px; 	border-radius:5px; 	background:' + popup_background_color +'; 	z-index:200001; 	text-align:center; 	margin:0 auto; 	padding:60px 75px; max-width:85%;}  #fff-modal-pop-wrapper .fff-modal-pop-popup-close { -webkit-border-radius:2px!important; -moz-border-radius:2px!important; border-radius:2px; position:absolute!important; right:-15px!important; top:-15px!important; height:30px!important; width:30px!important; background-image:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAA3FpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMy1jMDExIDY2LjE0NTY2MSwgMjAxMi8wMi8wNi0xNDo1NjoyNyAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtcE1NOk9yaWdpbmFsRG9jdW1lbnRJRD0ieG1wLmRpZDozZWEyNDI5ZC0yYmI3LWYzNDMtYjBjZi1jMGJjYTE4ODRmZjkiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6NjRGMTI2QTcxNDBFMTFFNUFENEZCRDVFQ0JDQjQyQzIiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6NjRGMTI2QTYxNDBFMTFFNUFENEZCRDVFQ0JDQjQyQzIiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIChXaW5kb3dzKSI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJ4bXAuaWlkOjVmYzc3OTY1LWUxNWUtNGU0Ni04ODFjLTBlOTQ3YjBmMzBmNyIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDozZWEyNDI5ZC0yYmI3LWYzNDMtYjBjZi1jMGJjYTE4ODRmZjkiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz5iCEbHAAABl0lEQVR42sSXS07DMBCGnSKyDorEAVjACTgCIEVlXU5R9QjlCk3VAzTrLhMJ2NIVJ2DDuo9EsKUszEw0kaIQbI+bxy/9UhRP5pMcjz12pJTCQKfgO/AN+Bp8AfZo7Av8AX4Dv4CfwD/ajAhW2ANPwTtprj1946lyq6AP4I2014ZyGINPwAvZnBaUUwnGgJVsXqsqvAoOZXua/wceyfY1KngOlROWxjv4XLSrHfgKS3BALyYdQAUxJkUdu7o6jeNYZlmmnUeMwViNkOUieKiLTNNURlGkhOPYcrnMYw00RPDMJFIFZ0JRIYJfTaPr4BZQ1Fow9+EcgCAEWkLz/4zl9A1rzOUsTQCKJEny5yAIhO/73NV9GNjUhOM4tc8scae6PL3laedONYLXNtC6f85dXDNb6BHw0GgDKaCqxEz4fbFlpk1smQjnbJmCeqSuNO3jWNyDL8vHIrao4w6OxTGx/rQ+8z5an16bvd7a22pDvz0CuOU29NUrzKOuzqvlTN8orzAO89J2W7q0ndHYZ+nS9kw+6BL+CjAAEvDTBJC9qhAAAAAASUVORK5CYII=); background-position:center center; background-repeat:no-repeat; cursor:pointer!important; -webkit-transition:.3s ease-out!important; -moz-transition:.3s ease-out!important; -o-transition:.3s ease-out!important; transition:.3s ease-out!important; } #fff-modal-pop-wrapper .fff-modal-pop-popup h3 {     font-size: 24px;     margin: 0 0 40px;        font-weight: 300;     white-space: nowrap;     line-height: 1.8;     letter-spacing: 0; } #fff-modal-pop-wrapper .fff-modal-pop-popup input[type=text].fff-modal-pop-number {     height: auto;     box-sizing: content-box;      font-size: 16px;     font-family: Arial;     font-weight: normal;     background-color: transparent;     border: none;     border-width: 0;     display: inline-block;     -webkit-border-radius: 0;     -moz-border-radius: 0;     border-radius: 0;     border-bottom: #00bed5 solid 1px;     padding: 0;     padding-bottom: 10px;     margin: 20px 10px 20px 0px;       outline: none; text-align:center; }   #fff-modal-pop-wrapper .fff-modal-pop-popup .fff-modal-pop-powered {     font-size: .8em;     position: absolute;     bottom: 10px;     right: 15px; } #fff-modal-pop-wrapper .fff-modal-pop-popup .fff-modal-pop-powered a {     font-weight: bold;     color: #383838;     text-decoration: none; } .fff-modal-pop-submit{background:' + popup_submit_color + ';padding:10px 40px;border:0px; border-radius: 5px;color:' + popup_submit_text_color + ';font-weight:bold;cursor:pointer;} .fff-modal-pop-footer{color: ' + popup_footer_color + '; text-align:center;padding:10px 0 20px 0;} </style><div id="fff-modal-pop-wrapper" ><div class="fff-modal-pop-overlay"></div><div class="fff-modal-pop-table"><div class="fff-modal-pop-cell"><div class="fff-modal-pop-popup"><div class="fff-modal-pop-header"><span onclick="closealopopup()" class="fff-modal-pop-popup-close"></span></div><div class="fff-modal-pop-form" id="fff-modal-pop-form"><div style="color:' + popup_header_color +';font-size:12px; text-transform: uppercase;font-weight:bold;">' + popup_header_text + '</div><div style="color:'+ popup_des_color + ';font-size:24px;padding:10px 0 20px 0">'+ popup_des_text +'</div><div class="fff-modal-pop-input-wrapper"><div class="input">' + popup_input_hoten + popup_input_email + popup_input_sodt +'</div></div><div class="fff-modal-pop-message"></div><div class="fff-modal-pop-footer">'+ popup_footer_text +'</div><div><button class="fff-modal-pop-submit" type="submit">' + popup_submit_text +'</button></div></div></div></div></div></div>';	
	document.body.insertAdjacentHTML( 'afterbegin', popup_fff_content_show );
	return false;
}  
	</script>
  <? include("modules/footer.php");?>