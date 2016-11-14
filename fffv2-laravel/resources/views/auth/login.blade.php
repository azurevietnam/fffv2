@extends('front.template')
<?php $left_menu = "small 111111"; ?>

@section('main')
    <section id="wrapper" class="login-register">
        <div class="login-box login-sidebar">
            <div class="white-box">
                <form class="form-horizontal form-material" id="loginform" method="post" action="/login" accept-charset="utf-8">
                    <a href="javascript:void(0)" class="text-center db"><img src=".{{url('/')}}/plugins/images/eliteadmin-logo-dark.png" alt="Home" />
                    <br/><img src="{{url('/')}}/plugins/images/eliteadmin-text-dark.png" alt="Home" /></a>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    {!! Form::controlNoLabel('email', 'email', 1, $errors, "Email", 'm-t-40') !!}
                    {!! Form::controlNoLabel('password', 'password', 1, $errors, "Mật khẩu") !!}

                    <div class="form-group">
                        <div class="col-md-12">
                            <div class="checkbox checkbox-primary pull-left p-t-0">
                                <input id="checkbox-signup" name="memory" type="checkbox">
                                <label for="checkbox-signup"> Ghi nhớ đăng nhập của tôi</label>
                            </div>
                            <a href="/password/reset" id="to-recover" class="text-dark pull-right"><i class="fa fa-lock m-r-5"></i> Quên mật khẩu?</a>
                        </div>
                        <div class="clearfix"></div>
                        @if(session()->has('error'))
                            @include('partials/error', ['type' => 'danger', 'message' => session('error')])
                        @endif
                    </div>

                    <div class="form-group text-center m-t-20">
                        <div class="col-xs-12">
                            <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Đăng Nhập</button>
                        </div>
                    </div>

                    <div class="form-group m-b-0">
                        <div class="col-sm-12 text-center">
                            <p>Bạn chưa có tài khoản. <a href="/register" class="text-primary m-l-5"><b>Đăng ký</b></a></p>
                        </div>
                    </div>
                </form>
                <form class="form-horizontal" id="recoverform" action="index.html">
                    <div class="form-group ">
                        <div class="col-xs-12">
                            <h3>Recover Password</h3>
                            <p class="text-muted">Enter your Email and instructions will be sent to you! </p>
                        </div>
                    </div>
                    <div class="form-group ">
                        <div class="col-xs-12">
                            <input class="form-control" type="text" required="" placeholder="Email">
                        </div>
                    </div>
                    <div class="form-group text-center m-t-20">
                        <div class="col-xs-12">
                            <button class="btn btn-primary btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Reset</button>
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
            @if(session('memory'))
                $('#checkbox-signup').trigger('click');
            @endif
        });
    </script>
@endsection