@extends('front.template')
<?php $left_menu = "small 111111"; ?>

@section('main')
    <section id="wrapper" class="login-register">
        <div class="login-box login-sidebar">
            <div class="white-box">
                <form class="form-horizontal form-material" id="loginform" method="post" action="/register" accept-charset="utf-8">
                    <a href="javascript:void(0)" class="text-center db"><img src="{{url("/")}}/plugins/images/eliteadmin-logo-dark.png" alt="Home" />
                        <br/><img src="{{url("/")}}/plugins/images/eliteadmin-text-dark.png" alt="Home" /></a>
                    <h3 class="box-title m-t-40 m-b-0">ĐĂNG KÝ</h3><small>Tạo tài khoản mới chỉ trong vài giây</small>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    {!! Form::controlNoLabel('text', 'fullname', 1, $errors, 'Họ và Tên', 'm-t-20') !!}
                    {!! Form::controlNoLabel('email', 'email', 0, $errors, "Email") !!}
                    {!! Form::controlNoLabel('text', 'phone', 0, $errors, "Số điện thoại") !!}
                    {!! Form::controlNoLabel('password', 'password', 0, $errors, "Mật khẩu") !!}
                    {!! Form::controlNoLabel('password', 'confirm_password', 0, $errors, "Nhắc lại mật khẩu") !!}

                    <div class="form-group">
                        <div class="col-md-12">
                            <div class="checkbox checkbox-primary p-t-0">
                                <input id="checkbox-signup" name="agreement" type="checkbox">
                                <label for="checkbox-signup"> Tôi đồng ý với <a href="#">quy định</a> của fff.com.vn</label>
                            </div>
                            @if($errors->has('agreement'))
                                @include('partials/error', ['type' => 'danger', 'message' => $errors->first('agreement')])
                            @endif
                        </div>
                    </div>
                    <div class="form-group text-center m-t-20">
                        <div class="col-xs-12">
                            <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Đăng ký</button>
                        </div>
                    </div>
                    <div class="form-group m-b-0">
                        <div class="col-sm-12 text-center">
                            <p>Bạn đã có tài khoản <a href="/login" class="text-primary m-l-5"><b>Đăng nhập</b></a></p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- jQuery -->
    <!-- jQuery -->
@endsection

@section('scripts')
    <script>
        $(function () {
            @if(old('agreement'))
                $('#checkbox-signup').trigger('click');
            @endif
        });
    </script>
@endsection