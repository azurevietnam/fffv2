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
                        <h4 class="page-title">Cấu hình mã theo dõi</h4> </div>
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
									<label class="col-sm-3" for="example-input-normal">Bước 1: Adwords Tracking URL</label>
									<div class="col-sm-9">
										<input type="text" class="form-control" onclick="this.focus();this.select()" value="http://tracking.fff.com.vn?keycode=7kXT5cyAAeFmh&amp;lpurl={lpurl}">
									</div>
								</div>
                               <div class="form-group">
									<label class="col-sm-3">Bước 2: Mã theo dõi <br><p class="content-group-lg">Bạn cần copy đoạn mã và dán vào trước thẻ <span class="text-warning"><strong>&lt;/head&gt;</strong></span> của website.</p></label>
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