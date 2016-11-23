<div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse slimscrollsidebar">
                <ul class="nav" id="side-menu">
                    <li class="sidebar-search hidden-sm hidden-md hidden-lg">
                        <!-- input-group -->
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Search..."> <span class="input-group-btn">
                            <button class="btn btn-default" type="button"> <i class="fa fa-search"></i> </button>
                            </span>
                        </div>
                        <!-- /input-group -->
                    </li>
                    <li class="user-pro">
                        <a href="#" class="waves-effect">
                            <img src="{{url('/')}}/plugins/images/users/agent.jpg" alt="user-img" class="img-circle">
                            <span class="hide-menu">{{ str_limit(auth()->user()->fullname, 16, '...') }}<span class="fa arrow"></span></span>
                        </a>
                        <ul class="nav nav-second-level">
                            <li><a href="/profile"><i class="ti-user"></i> Tài khoản</a></li>
                            <li><a href="javascript:void(0)"><i class="ti-email"></i> Hộp thư</a></li>
                            <li>
                                <a href="{{ url('/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" id="logout"><i class="fa fa-power-off"></i> Logout</a>
                                {!! Form::open(['url' => '/logout', 'id' => 'logout-form']) !!}{!! Form::close() !!}
                            </li>
                        </ul>
                    </li>
                    <li class="nav-small-cap m-t-10">--- CHỨC NĂNG</li>
                    <li> <a href="/" class="waves-effect"><i class="linea-icon linea-basic fa-fw" data-icon="v"></i> <span class="hide-menu"> Dashboard </span></a></li>
                    <li class="active"> <a href="" class="waves-effect active"><i class="linea-icon linea-basic fa-fw" data-icon="&#xe019;"></i> <span class="hide-menu"> Chặn click ảo theo IP<span class="fa arrow"></span> </span></a>
                        <ul class="nav nav-second-level collapse in">
                            <li> <a href="/click/ip-click-ao">Báo cáo IP truy cập</a> </li>
                            <li> <a href="/click/ip-khu-vuc">Báo cáo theo khu vực</a> </li>
                        </ul>
                    </li>

                    <li> <a href="javascript:void(0);" class="waves-effect"><i class="linea-icon linea-basic fa-fw" data-icon="E"></i> <span class="hide-menu"> Thu Thập Thông Tin<span class="fa arrow"></span> </span></a>
                        <ul class="nav nav-second-level">
                            <li> <a href="thuthapthongtin-baocao.php">Báo cáo thu thập</a> </li>
                            <li> <a href="thuthapthongtin-cauhinh.php">Cấu hình popup</a> </li>

                        </ul>
                    </li>
                <li> <a href="javascript:void(0);" class="waves-effect"><i class="linea-icon linea-basic fa-fw" data-icon="B"></i> <span class="hide-menu"> Khách hàng<span class="fa arrow"></span> </span></a>
                <ul class="nav nav-second-level">
                    <li> <a href="khachhang-chuadinhdanh.php">Chưa định danh</a> </li>
                    <li> <a href="khachhang-dinhdanh.php">Định danh</a> </li>
                    <li> <a href="property-3-column.html">Quan tâm</a> </li>
                    <li> <a href="property-4-column.html">Mua hàng</a> </li>
                    <li> <a href="property-detail.html">Khách cũ</a> </li>
                </ul>
            </li>
                    <li><a href="inbox.html" class="waves-effect"><i data-icon=")" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Công Cụ<span class="fa arrow"></span><span class="label label-rouded label-danger pull-right">New</span></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="khachhang-chat.php">Chat-message</a></li>
                            <li><a href="chat.html">Push Notifications</a></li>
                            <li><a href="chat.html">SMS</a></li>
                            <li><a href="chat.html">Email Marketing</a></li>
                            <li><a href="chat.html">Facebook Chat</a></li>
                        </ul>
                    </li>
                    <li> <a href="#" class="waves-effect"><i data-icon="/" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Tùy Chỉnh<span class="fa arrow"></span> <span class="label label-rouded label-info pull-right">13</span> </span></a>
                        <ul class="nav nav-second-level">
							<li><a href="cauhinh-matheodoi.php">Mã theo dõi</a></li>
							<li><a href="cauhinh-chat.php">Cấu hình chat box</a></li>
                            <li ><a href="/config/cauhinh-chanclicktac" >Chặn click tặc</a></li>
                            <li><a href="panel-ui-block.html">Phản hồi realtime</a></li>
                           
                        </ul>
                    </li>

                    <li class="nav-small-cap">--- QUẢN TRỊ</li>
                    <li><a href="quantri-quanlykhachhang.php" class="waves-effect"><i class="fa fa-empire"></i> <span class="hide-menu">Quản lý khách hàng</span></a></li>
                    
                </ul>
            </div>
        </div>