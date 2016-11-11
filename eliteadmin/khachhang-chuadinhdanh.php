<? include("./modules/header.php");?>
<body>
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
                        <h4 class="page-title">IP Click Ảo</h4> </div>
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
                            <h3 class="box-title m-b-0">KHÁCH HÀNG CHƯA ĐỊNH DANH</h3>
                            <p class="text-muted m-b-20">Khách hàng chưa định danh là khách hàng chưa cung cấp thông tin cá nhân như: tên, số điện thoại, email, facebook, tuổi, giới tính. Bạn có thể thiết lập <span class="mytooltip tooltip-effect-1"> <span class="tooltip-item2">Quy tắc Định Danh</span> <span class="tooltip-content4 clearfix"> <span class="tooltip-text2"> <strong>Phương Pháp Định Danh</strong> gồm 3 phương pháp: tự động nhận diện số điện thoại, đề nghị cung cấp thông tin, chat trực tiếp với khách hàng. </span></span>
							</p>
							
							 <!-- Nav tabs -->
							<ul class="nav customtab2 nav-tabs" role="tablist">
							  <li role="presentation" class="active"><a href="#home6" aria-controls="home" role="tab" data-toggle="tab" aria-expanded="false"><span class="visible-xs"><i class="ti-home"></i></span><span class="hidden-xs"> Toàn bộ (100)</span></a></li>
							  <li role="presentation" class=""><a href="#profile6" aria-controls="profile" role="tab" data-toggle="tab" aria-expanded="false"><span class="visible-xs"><i class="ti-user"></i></span> <span class="hidden-xs">Trả tiền (10)</span></a></li>
							  <li role="presentation" class=""><a href="#messages6" aria-controls="messages" role="tab" data-toggle="tab" aria-expanded="true"><span class="visible-xs"><i class="ti-email"></i></span> <span class="hidden-xs">Trực tiếp (3)</span></a></li>
							  <li role="presentation" class=""><a href="#settings6" aria-controls="settings" role="tab" data-toggle="tab" aria-expanded="false"><span class="visible-xs"><i class="ti-settings"></i></span> <span class="hidden-xs">Giới thiệu (30)</span></a></li>
							  <li role="presentation" class=""><a href="#settings6" aria-controls="settings" role="tab" data-toggle="tab" aria-expanded="false"><span class="visible-xs"><i class="ti-settings"></i></span> <span class="hidden-xs">PC (30)</span></a></li>
							  <li role="presentation" class=""><a href="#settings6" aria-controls="settings" role="tab" data-toggle="tab" aria-expanded="false"><span class="visible-xs"><i class="ti-settings"></i></span> <span class="hidden-xs">Mobile (30)</span></a></li>
							  <li role="presentation" class=""><a href="#settings6" aria-controls="settings" role="tab" data-toggle="tab" aria-expanded="false"><span class="visible-xs"><i class="ti-settings"></i></span> <span class="hidden-xs">Tablet (30)</span></a></li>
							  
							</ul>
							<!-- Tab panes -->
							
                            <div class="table-responsive dataTables_wrapper ">
                                <table class="table color-table inverse-table">
                                    <thead>
                                        <tr>
                                            <th>Stt</th>
                                            
                                            <th>Nhận diện</th>
                                            <th>Ip</th>
                                            <th>Tương tác</th>
											<th>Lần xem cuối</th>
											<th>Lần xem đầu</th>
                                            <th>Số trang xem</th>
                                            <th>Thiết bị</th>
                                            <th>Trình duyệt</th>
                                            <th>Tỉnh thành</th>
                                            <th>Quốc gia</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><a href="javascript:void(0)">1</a></td>
                                           
                                            <td><i class="fa fa-circle-o text-info"></i> KH_0001</td>
                                            <td>192.168.1.1</td>
                                            <td>
												<a href="khachhang-chat.php"><button type="button" class="btn btn-outline btn-info waves-effect waves-light" data-toggle="tooltip" data-placement="top" title="" data-original-title="Chat với khách hàng">
												<i class="fa fa-comments-o m-r-5"></i> Chat 
												</button></a>
											</td>
											 <td>1 phút trước</td>
											 <td>18h00 - 20/10</td>
                                            <td>3 trang</td>
											
                                            <td>IPHONE</td>
                                            <td>Safari</td>
                                            <td>Hà Nội</td>
                                            <td>Việt Nam</td>
                                        </tr>
                                        <tr>
                                            <td><a href="javascript:void(0)">2</a></td>
                                           <td><i class="fa fa-circle-o text-danger"></i> KH_0002</td>
                                            <td> 192.168.1.1</td>
                                            <td>
												<a href="khachhang-chat.php"><button type="button" class="btn btn-outline btn-info waves-effect waves-light" data-toggle="tooltip" data-placement="top" title="" data-original-title="Chat với khách hàng">
												<i class="fa fa-comments-o m-r-5"></i> Chat 
												</button></a>
											</td>
											 <td>1 phút trước</td>
											 <td>18h00 - 20/10</td>
                                            <td>3 trang</td>
											
                                            <td>IPHONE</td>
                                            <td>Safari</td>
                                            <td>Hà Nội</td>
                                            <td>Việt Nam</td>
                                        </tr>
										 <tr>
                                            <td><a href="javascript:void(0)">2</a></td>
                                           <td><i class="fa fa-circle-o text-danger"></i> KH_0002</td>
                                            <td> 192.168.1.1</td>
                                            <td>
												<a href="khachhang-chat.php"><button type="button" class="btn btn-outline btn-info waves-effect waves-light" data-toggle="tooltip" data-placement="top" title="" data-original-title="Chat với khách hàng">
												<i class="fa fa-comments-o m-r-5"></i> Chat 
												</button></a>
											</td>
											 <td>1 phút trước</td>
											 <td>18h00 - 20/10</td>
                                            <td>3 trang</td>
											
                                            <td>IPHONE</td>
                                            <td>Safari</td>
                                            <td>Hà Nội</td>
                                            <td>Việt Nam</td>
                                        </tr>
										 <tr>
                                            <td><a href="javascript:void(0)">2</a></td>
                                           <td><i class="fa fa-circle-o text-danger"></i> KH_0002</td>
                                            <td> 192.168.1.1</td>
                                            <td>
												<button type="button" class="btn btn-outline btn-info waves-effect waves-light" data-toggle="tooltip" data-placement="top" title="" data-original-title="Chat với khách hàng">
												<i class="fa fa-comments-o m-r-5"></i> Chat 
												</button>
											</td>
											 <td>1 phút trước</td>
											 <td>18h00 - 20/10</td>
                                            <td>3 trang</td>
											
                                            <td>IPHONE</td>
                                            <td>Safari</td>
                                            <td>Hà Nội</td>
                                            <td>Việt Nam</td>
                                        </tr>
										 <tr>
                                            <td><a href="javascript:void(0)">2</a></td>
                                           <td><i class="fa fa-circle-o text-danger"></i> KH_0002</td>
                                            <td> 192.168.1.1</td>
                                            <td>
												<button type="button" class="btn btn-outline btn-info waves-effect waves-light" data-toggle="tooltip" data-placement="top" title="" data-original-title="Chat với khách hàng">
												<i class="fa fa-comments-o m-r-5"></i> Chat 
												</button>
											</td>
											 <td>1 phút trước</td>
											 <td>18h00 - 20/10</td>
                                            <td>3 trang</td>
											
                                            <td>IPHONE</td>
                                            <td>Safari</td>
                                            <td>Hà Nội</td>
                                            <td>Việt Nam</td>
                                        </tr>
										 <tr>
                                            <td><a href="javascript:void(0)">2</a></td>
                                           <td><i class="fa fa-circle-o text-danger"></i> KH_0002</td>
                                            <td> 192.168.1.1</td>
                                            <td>
												<button type="button" class="btn btn-outline btn-info waves-effect waves-light" data-toggle="tooltip" data-placement="top" title="" data-original-title="Chat với khách hàng">
												<i class="fa fa-comments-o m-r-5"></i> Chat 
												</button>
											</td>
											 <td>1 phút trước</td>
											 <td>18h00 - 20/10</td>
                                            <td>3 trang</td>
											
                                            <td>IPHONE</td>
                                            <td>Safari</td>
                                            <td>Hà Nội</td>
                                            <td>Việt Nam</td>
                                        </tr>
										 <tr>
                                            <td><a href="javascript:void(0)">2</a></td>
                                           <td><i class="fa fa-circle-o text-danger"></i> KH_0002</td>
                                            <td> 192.168.1.1</td>
                                            <td>
												<button type="button" class="btn btn-outline btn-info waves-effect waves-light" data-toggle="tooltip" data-placement="top" title="" data-original-title="Chat với khách hàng">
												<i class="fa fa-comments-o m-r-5"></i> Chat 
												</button>
											</td>
											 <td>1 phút trước</td>
											 <td>18h00 - 20/10</td>
                                            <td>3 trang</td>
											
                                            <td>IPHONE</td>
                                            <td>Safari</td>
                                            <td>Hà Nội</td>
                                            <td>Việt Nam</td>
                                        </tr>
										 <tr>
                                            <td><a href="javascript:void(0)">2</a></td>
                                           <td><i class="fa fa-circle-o text-danger"></i> KH_0002</td>
                                            <td> 192.168.1.1</td>
                                            <td>
												<button type="button" class="btn btn-outline btn-info waves-effect waves-light" data-toggle="tooltip" data-placement="top" title="" data-original-title="Chat với khách hàng">
												<i class="fa fa-comments-o m-r-5"></i> Chat 
												</button>
											</td>
											 <td>1 phút trước</td>
											 <td>18h00 - 20/10</td>
                                            <td>3 trang</td>
											
                                            <td>IPHONE</td>
                                            <td>Safari</td>
                                            <td>Hà Nội</td>
                                            <td>Việt Nam</td>
                                        </tr>
										 <tr>
                                            <td><a href="javascript:void(0)">2</a></td>
                                           <td><i class="fa fa-circle-o text-danger"></i> KH_0002</td>
                                            <td> 192.168.1.1</td>
                                            <td>
												<button type="button" class="btn btn-outline btn-info waves-effect waves-light" data-toggle="tooltip" data-placement="top" title="" data-original-title="Chat với khách hàng">
												<i class="fa fa-comments-o m-r-5"></i> Chat 
												</button>
											</td>
											 <td>1 phút trước</td>
											 <td>18h00 - 20/10</td>
                                            <td>3 trang</td>
											
                                            <td>IPHONE</td>
                                            <td>Safari</td>
                                            <td>Hà Nội</td>
                                            <td>Việt Nam</td>
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