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
                        <h4 class="page-title">BÁO CÁO TỔNG QUÁT</h4> </div>
						<div class="col-lg-6 col-sm-4 col-md-4 col-xs-12"> </div>
						<div class="col-lg-3 col-sm-4 col-md-4 col-xs-12"> 
							<div class="input-group"><input class="form-control input-daterange-datepicker " id="input-daterange-datepicke" placeholder="01/01/2015 - 01/31/2015" type="text"> <span class="input-group-addon"><i class="icon-calender"></i></span> </div>
						</div>
                    <!-- /.col-lg-12 -->
                </div>
				<!-- a row -->
				<div class="row white-box-full padding-20px">
					<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 text-center p-t-60">
					
						<input data-plugin="knob" data-width="200" data-height="200" data-min="0" data-displayPrevious=true data-max="100" data-step="1" value="75" data-fgColor="#03a9f3"  data-readOnly=true  data-thickness=".1"  />
						<h6 class="text-muted">Điểm tối ưu adwords</h6> 
					</div>
					<div class="col-lg-8 col-md-8">
					<h3 class="text-center">Bạn đã chi <span class="text-info" id="total-ads-bugdet">23,000,000</span> trong vòng 30 ngày cho quảng cáo Adwords</h3>
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						
						<ul class="list-stacked">
							<li>
								<span id="">Chi phí quảng cáo trung bình mỗi click chuột</span>
								<span id="chi-phi-quang-cao-trung-binh-cpc" class="pull-right" >3,200 VND</span>
							</li>
							
							<li>
								<span>Ngân sách còn thiếu</span>
								<span id="ngan-sach-con-thieu" class="pull-right" > 10,000,000 vnd</span>
							</li>
							<li>
								<span>Tỉ lệ quảng cáo không được hiển thị</span>
								<span id="ti-le-quang-cao-hien-thi" class="pull-right">30%</span>
							</li>
							
							<li>
								<span>Vị trí quảng cáo trung bình</span>
								<span id="vi-tri-quang-cao-trung-binh" class="pull-right">3</span>
							</li>
							<li>
								<span>Số nhấp chuột vào quảng cáo</span>
								<span id="so-nhap-chuot" class="pull-right">10,000</span>
							</li>
							<li>
								<span>Số nhấp chuột ảo</span>
								<span id="so-nhap-chuot-ao" class="pull-right">6,00,00</span>
							</li>
						</ul>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<ul class="list-stacked">
							<li>
								<span id="">Chi phí quảng cáo trung bình mỗi hiển thị</span>
								<span id="chi-phi-quang-cao-trung-binh-impression" class="pull-right" >3,200 VND</span>
							</li>
							<li>
								<span >Chi phí cho mỗi chuyển đổi</span>
								<span id="chi-phi-cho-moi-chuyen-doi" class="pull-right">1</span>
							</li>
							<li>
								<span>Tỉ lệ chuyển đổi</span>
								<span id="ti-le-chuyen-doi" class="pull-right">1</span>
							</li>
							<li>
								<span>Tỉ lệ chuyển đổi trên các thiết bị</span>
								<span id="ti-le-chuyen-doi-tren-cac-thiet-bi" class="pull-right">17</span>
							</li>
							
							<li>
								<span >Điểm chất lượng</span>
								<span id="diem-chat-luong" class="pull-right">1</span>
							</li>
							<li>
								<span>Tỉ lệ quảng cáo không hiển thị do điểm thấp</span>
								<span id="ti-le-quang-cao-khong-hien-thi-do-dcl" class="pull-right" >1</span>
							</li>
							
						</ul>
					</div>
					</div>
				</div>
				<!-- a row -->
				<div class="row " style="display:none">
                    <div class="col-md-8 col-sm-12 col-xs-12">
                        <div class="white-box-full">
                            <div class="table-responsive">
							  <table id="homepage-table-adwords" class="table color-table info-table color-bordered-table info-bordered-table" >
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
								  </tr>
								</thead>
								<tbody>
								
								</tbody>
							  </table>
							</div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 col-xs-12">
                       <div class="white-box" style="min-height:310px">
					   
							<div id="home_adwords" style="height: 310px;"></div>
					  </div>
                    </div>
                </div>
				
                <div class="row">
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <div class="white-box">
                            <h3 class="box-title"><small class="pull-right m-t-10 text-success"><i class="fa fa-sort-asc"></i> Tăng 18% so với hôm qua</small> TRAFFIC HÔM NAY</h3>
                            <div class="stats-row">
                                <div class="stat-item">
                                    <h6>PC</h6> <b>80.40%</b></div>
                                <div class="stat-item">
                                    <h6>Mobile</h6> <b>15.40%</b></div>
                                <div class="stat-item">
                                    <h6>Tablet</h6> <b>5.50%</b></div>
                            </div>
                            <div id="sparkline8"></div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <div class="white-box">
                            <h3 class="box-title"><small class="pull-right m-t-10 text-danger"><i class="fa fa-sort-desc"></i> Giảm 19% so với hôm qua</small>CLICK ẢO HÔM NAY</h3>
                            <div class="stats-row">
                                <div class="stat-item">
                                    <h6>PC</h6> <b>80.40%</b></div>
                                <div class="stat-item">
                                    <h6>Mobile</h6> <b>15.40%</b></div>
                                <div class="stat-item">
                                    <h6>Tablet</h6> <b>5.50%</b></div>
                            </div>
                            <div id="sparkline9"></div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 col-xs-12">
                       <div class="white-box" style="min-height:215px">
						<h3 class="box-title"><i class="ti-cut text-danger"></i> TIẾT KIỆM ƯỚC TÍNH</h3>
						<div class="text-right"> <span class="text-muted">Tiết kiệm từ đầu tháng</span>
						  <h1><sup><i class="ti-arrow-down text-danger"></i></sup> $5,000</h1>
						</div>
						<span class="text-danger">Tiết kiệm 50%</span>
						<div class="progress m-b-0">
						  <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:50%;"> <span class="sr-only">230% Complete</span> </div>
						</div>
					  </div>
                    </div>
                </div>
				 <!-- /.row -->
				  <div class="row">
					<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
					  <div class="white-box">
						<h3 class="box-title">Lượng Người Dùng Truy Cập</h3>
						
						<div id="basic_bars" style="height: 340px;"></div>
					  </div>
					</div>
					
					
				  </div>
				  <!--row -->
				  
				  <!--row -->
				  <div class="row  white-box-full">
				  <h3 class="box-title">BÁO CÁO KHÁCH HÀNG</h3>
				   <div class="white-box">
						<div class="col-md-7 col-lg-8 col-sm-12 col-xs-12">
							<div id="customer_2" style="height: 400px;"></div>
						</div>
					   <div class="col-md-5 col-lg-4 col-sm-12 col-xs-12">
							  <div id="customer_1" class="ecomm-donute" style="height: 400px;"></div>
							  
					   </div>  
					   <div style="clear:both"></div>
					</div>				   
				  </div>
				  <!-- row -->
				  
				  
                <!-- /.row -->
                
                <!--row -->
                
                <!-- /.container-fluid -->
                <footer class="footer text-center"> 2016 &copy; FFF.COM.VN - New version </footer>
            </div>
            <!-- /#page-wrapper -->
        </div>
        <!-- /#wrapper -->
        <!-- jQuery -->
		<script>
        $(document).ready(function () {
			/*
     		$('#homepage-table-adwords').DataTable( {
				"ajax": 'http://adwords.fff.com.vn/campaign-get-listcampaign-homepage.php?adword=322-238-9982',
				"order": [[ 7, "DESC" ]],
				"paging": false,
				"searching": false,
				"bInfo" : false,
				"pageLength": 6,
			});
			*/
			//ajax load homepage-campaign-performance-report.php
			$.getJSON("http://adwords.fff.com.vn/homepage-campaign-performance-report.php?adword=322-238-9982")
			  .done(function( json ) {
					
					$("#chi-phi-quang-cao-trung-binh-cpc").html(json.data.cpc + " VND");
					$("#chi-phi-quang-cao-trung-binh-impression").html(json.data.cost_per_impression + " VND");
					$("#ngan-sach-con-thieu").html(json.data.budget_lost + " VND");
					$("#ti-le-quang-cao-hien-thi").html(json.data.search_impr_share);
					$("#vi-tri-quang-cao-trung-binh").html(json.data.avg_position);
					$("#so-nhap-chuot").html(json.data.click);
					$("#so-nhap-chuot-ao").html(json.data.invaid_click);
					
					$("#chi-phi-cho-moi-chuyen-doi").html(json.data.convertion_cost + " VND");
					$("#ti-le-chuyen-doi").html(json.data.convertion_rate);
					$("#ti-le-chuyen-doi-tren-cac-thiet-bi").html(json.data.convertion_device_rate);
					$("#diem-chat-luong").html(json.data.QualityScore);
					$("#ti-le-quang-cao-khong-hien-thi-do-dcl").html(json.data.lost_is_rank);
					
					$("#total-ads-bugdet").html(json.data.cost);
			  });
			
        });
    </script>
	<script src="../plugins/bower_components/knob/jquery.knob.js"></script>
    <script>
        $(function () {
			
			$('[data-plugin="knob"]').knob({
			  'format' : function (value) {
				 return value + '%';
			  }
			});

        });
    </script>
	
		
  <? include("modules/footer.php");?>