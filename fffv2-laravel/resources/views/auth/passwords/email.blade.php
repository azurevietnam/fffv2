@extends('front.template')
@section('main')
    <section id="wrapper" class="login-register">
        <div class="login-box">
            <div class="white-box">
                <form class="form-horizontal form-material" id="loginform" method="post" action="/password/email" accept-charset="utf-8">
                    <h3 class="box-title m-b-20">Quên mật khẩu</h3>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    {!! Form::controlNoLabel('email', 'email', 1, $errors, "Email") !!}
                    <div class="form-group text-center m-t-20">
                        <div class="col-xs-12">
                            <button class="btn btn-info btn-block text-uppercase waves-effect waves-light" type="submit">Nhận mật khẩu</button>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-12">
                            <a href="/register" class="text-dark pull-left"><i class="fa fa-inbox m-r-5"></i>Đăng ký</a>
                            <a href="/login" class="text-dark pull-right"><i class="fa fa-sign-in m-r-5"></i>Đăng nhập</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection