@extends('front.template')

@section('main')
    <div id="wrapper">
        <!-- Navigation - Top -->
    @include('front/modules/nav-top')
    <!-- Navigation - Top -->

        <!-- Left navbar-header -->
    @include('front/modules/nav-left')
    <!-- Left navbar-header end -->
    <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Tài khoản khách hàng</h4> </div>
                    <div class="col-lg-6 col-sm-4 col-md-4 col-xs-12"> </div>
                    <div class="col-lg-3 col-sm-4 col-md-4 col-xs-12">

                    </div>
                    <!-- /.col-lg-12 -->
                </div>

                <!-- .row -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title m-b-0">Lịch Sử Thanh Toán</h3>
                            <div class="table-responsive">
                                <table class="table valign-middle">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Ngày Thanh Toán</th>
                                        <th>Ngày Hết Hạn</th>
                                        <th>Domain</th>
                                        <th>Tình Trạng</th>
                                        <th>Thanh toán qua</th>
                                        <th>Số tiền</th>
                                        <th>Gói dịch vụ</th>
                                        <th>Tiện ích gia tăng</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>20/10/2016</td>
                                        <td>20/11/2016</td>
                                        <td>toancau.com</td>
                                        <td><button class="fcbtn btn btn-info btn-outline btn-1e btn-sm">Đã Thanh Toán</button></td>
                                        <td>Ngân hàng VCB </td>
                                        <td>2.000.000</td>
                                        <td>1.500.000</td>
                                        <td>500.000</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>20/11/2016</td>
                                        <td>20/12/2016</td>
                                        <td>toancau.com</td>
                                        <td><button class="fcbtn btn btn-danger btn-outline btn-1e btn-sm">Chưa Thanh Toán</button></td>
                                        <td>Ngân hàng VCB </td>
                                        <td>2.000.000</td>
                                        <td>1.500.000</td>
                                        <td>500.000</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>20/12/2016</td>
                                        <td>20/01/2017</td>
                                        <td>toancau.com</td>
                                        <td><button class="fcbtn btn btn-warning btn-outline btn-1e btn-sm">Thanh Toán Ngay</button></td>
                                        <td>Ngân hàng VCB </td>
                                        <td>2.000.000</td>
                                        <td>1.500.000</td>
                                        <td>500.000</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-sm-6">
                        <div class="white-box">
                            <h3 class="box-title">Thông tin khách hàng</h3>
                            <form class="form-material form-horizontal m-t-30" method="post" action="/profile" accept-charset="utf-8">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="hidden" name="account_info" value="account_info">
                                <div class="form-group">
                                    <label class="col-md-12" for="example-email">Email</label>
                                    <div class="col-md-12">
                                        {!! Form::input("email", "email", $user->email, ['class' => 'form-control', 'required' => '']) !!}
                                        {!! $errors->first('email', '<small class="error-message">:message</small>') !!}
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-12" for="example-phone">Mật khẩu cũ</label>
                                    <div class="col-md-12">
                                        {!! Form::input("password", "password", '', ['class' => 'form-control', 'placeholder' => '*****']) !!}
                                        {!! $errors->first('password', '<small class="error-message">:message</small>') !!}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12" for="example-phone">Mật khẩu mới</label>
                                    <div class="col-md-12">
                                        {!! Form::input("password", "new_password", '', ['class' => 'form-control', 'placeholder' => '*****']) !!}
                                        {!! $errors->first('new_password', '<small class="error-message">:message</small>') !!}
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-12" for="pwd">Địa chỉ</label>
                                    <div class="col-md-12">
                                        {!! Form::textarea('address', $user->address, ['rows'=>"1", 'class' => 'form-control']) !!}
                                        {!! $errors->first('address', '<small class="error-message">:message</small>') !!}
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-info waves-effect waves-light m-r-10">Cập Nhập Thông Tin</button>

                            </form>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="white-box">
                            <h3 class="box-title">Thông tin liên hệ khác</h3>
                            <form class="form-material form-horizontal m-t-30" method="post" action="/profile" accept-charset="utf-8">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="hidden" name="account_contact" value="account_contact">
                                <div class="form-group">
                                    <label class="col-md-12" for="example-phone">Số điện thoại</label>
                                    <div class="col-md-12">
                                        {!! Form::input("phone", "phone", $user->phone, ['class' => 'form-control']) !!}
                                        {!! $errors->first('phone', '<small class="error-message">:message</small>') !!}
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-12" for="furl">Facebook </label>
                                    <div class="col-md-12">
                                        {!! Form::input("text", "user_facebook", $user->user_facebook, ['class' => 'form-control', 'placeholder' => 'http://facebook.com/[facebook-id]']) !!}
                                        {!! $errors->first('user_facebook', '<small class="error-message">:message</small>') !!}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12" for="turl">Skype</label>
                                    <div class="col-md-12">
                                        {!! Form::input("text", "user_skype", $user->user_skype, ['class' => 'form-control']) !!}
                                        {!! $errors->first('user_skype', '<small class="error-message">:message</small>') !!}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12" for="inurl">Zalo</label>
                                    <div class="col-md-12">
                                        {!! Form::input("text", "user_zalo", $user->user_zalo, ['class' => 'form-control']) !!}
                                        {!! $errors->first('user_zalo', '<small class="error-message">:message</small>') !!}
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-info waves-effect waves-light m-r-10">Cập Nhập Thông Tin</button>

                            </form>
                        </div>
                    </div>
                </div>

            </div>
            <!-- row -->
            <!-- /.row -->
            <!-- .right-sidebar -->
        @include("front/modules/nav-right")
        <!-- /.right-sidebar -->
        </div>
        <!-- /.container-fluid -->
        <footer class="footer text-center"> 2016 &copy; FFF.COM.VN - New version </footer>
    </div>
    <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
    <!-- jQuery -->

@endsection