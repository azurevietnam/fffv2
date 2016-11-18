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
                        <h4 class="page-title">Cấu hình chặn click tặc</h4> </div>
						<div class="col-lg-6 col-sm-4 col-md-4 col-xs-12"> </div>
						<div class="col-lg-3 col-sm-4 col-md-4 col-xs-12"> 
						
						</div>
                    <!-- /.col-lg-12 -->
                </div>
               
               <!-- .row -->
                <div class="row">
                    <div class="col-sm-12">
					 <div class="white-box">
                            <h3 class="box-title m-b-0">Mã Tracking</h3>
                            <p class="text-muted m-b-30 font-13">Để có thể tracking và chặn click tặc tốt nhất, bạn vui lòng thực hiện 2 bước gắn mã theo dõi sau.</p>
                            <form class="form-horizontal">
                               <div class="form-group">
									<label class="col-sm-3 control-label" for="example-input-normal">Bước 1: Adwords Tracking URL</label>
									<div class="col-sm-9">
										<input type="text" class="form-control" onclick="this.focus();this.select()" value="http://tracking.fff.com.vn?keycode=7kXT5cyAAeFmh&amp;lpurl={lpurl}">
									</div>
								</div>
                               <div class="form-group">
									<label class="control-label col-sm-3">Bước 2: Mã theo dõi <br><p class="content-group-lg">Bạn cần copy đoạn mã và dán vào trước thẻ <span class="text-warning"><strong>&lt;/head&gt;</strong></span> của website.</p></label>
									<div class="col-sm-9">
<textarea rows="8" cols="5" class="form-control" onclick="this.focus();this.select()">&lt;script type='text/javascript'&gt;
var _cgk = '7kXT5cyAAeFmh'; 
(function () {
	var cg = document.createElement('script'); cg.type = 'text/javascript'; cg.async = true;
	cg.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'admin.fff.com.vn/aui.js';
	var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(cg, s);
})();
&lt;/script&gt;</textarea>
									</div>
								</div>
                            </form>
                        </div>
                        <div class="white-box">
                            <h3 class="box-title m-b-0">Chặn Click Ảo Theo Hành Vi IP </h3>
                            <p class="text-muted m-b-30 font-13">Vui lòng cấu hình hành vi IP để chặn click ảo</p>
                            <form class="form-horizontal">
                                <div class="form-group">
                                    <label class="col-sm-3">Chặn 1 ip khi</label>
                                    <div class="col-sm-9">
                                        <select class="form-control">
                                            <option>Không chặn</option>
                                            <option>Click quảng cáo 1 lần</option>
                                            <option>Click quảng cáo 2 lần</option>
                                            <option>Click quảng cáo 3 lần</option>
                                            <option>Click quảng cáo 4 lần</option>
                                            <option>Click quảng cáo 5 lần</option>
                                            <option>Click quảng cáo 6 lần</option>
                                            
                                        </select>
                                    </div>
                                </div>
								<div class="form-group">
                                    <label class="col-sm-3">Trong vòng</label>
                                    <div class="col-sm-9">
                                        <select class="form-control">
												<option value="0" selected="selected"> Không quan tâm </option>
												<option value="30"> 30 phút </option>
												<option value="60"> 1 tiếng </option>
												<option value="120"> 2 tiếng </option>
												<option value="180"> 3 tiếng </option>
												<option value="240"> 4 tiếng </option>
												<option value="300"> 5 tiếng </option>
												<option value="360"> 6 tiếng </option>
												<option value="720"> 12 tiếng </option>
												<option value="1440"> 1 ngày </option>
												<option value="2880"> 2 ngày </option>
												<option value="4320"> 3 ngày </option>
												<option value="10080"> 7 ngày </option>
														
                                            
                                        </select>
                                    </div>
                                </div>
								<div class="form-group">
                                    <label class="col-sm-3">Số trang IP đó xem</label>
                                    <div class="col-sm-9">
                                        <select class="form-control">
												<option value="0" selected="selected"> Không quan tâm </option>
												<option>Xem 1 trang</option>
												<option>Xem 2 trang</option>
												<option>Xem 3 trang</option>
												<option>Xem 4 trang</option>
												
                                        </select>
                                    </div>
                                </div>
								<hr>
								<div class="form-group">
									<label class="col-lg-3">Chặn theo 3G<br> (Tùy chọn chặn khi người dùng sử dụng thiết bị 3G) </label>
									<div class="col-lg-9">
										<div class="checkbox checkbox-success">
                                                <input id="checkbox10" type="checkbox">
                                                <label for="checkbox10"> Mạng Viettel</label>
                                        </div>
										<div class="checkbox checkbox-success">
                                                <input id="checkbox11" type="checkbox">
                                                <label for="checkbox11"> Mạng Mobifone</label>
                                        </div>
										<div class="checkbox checkbox-success">
                                                <input id="checkbox12" type="checkbox">
                                                <label for="checkbox12"> Mạng Vinaphone</label>
                                        </div>
										
									</div>
								</div>
								<hr>
								<div class="form-group">
									<label class="col-lg-3">Chặn theo thiết bị truy cập<br> (Tùy chọn chặn theo thiết bị sử dụng) </label>
									<div class="col-lg-9">
										<div class="checkbox checkbox-success">
                                                <input id="checkbox20" type="checkbox">
                                                <label for="checkbox20"> Máy Tính</label>
                                        </div>
										<div class="checkbox checkbox-success">
                                                <input id="checkbox21" type="checkbox">
                                                <label for="checkbox21"> Mobile</label>
                                        </div>
										<div class="checkbox checkbox-success">
                                                <input id="checkbox22" type="checkbox">
                                                <label for="checkbox22"> Tablet</label>
                                        </div>
										
									</div>
								</div>
                            </form>
							<button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Lưu & Thực hiện chặn</button>
                        </div>
						 <div class="white-box">
                            <h3 class="box-title m-b-0">Loại trừ đặc biệt</h3>
                            <p class="text-muted m-b-30 font-13"> Ngăn quảng cáo hiển thị theo các IP hoặc dãy IP sau</p>
                            <form class="form-horizontal">
                                <div class="form-group">
									<div class="col-sm-12 col-xs-12">
										<div class="col-md-12">
											<textarea class="form-control" rows="5" placeholder="Ví dụ: Mỗi 1 dãy ip trên 1 dòng. Cấu trúc 123.123.*.*"></textarea>
										</div>
									</div>
									
                                </div>
								 
                            </form>
							<button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Lưu & Thực hiện chặn</button>
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