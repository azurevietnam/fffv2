@extends('front.template')
@section('main')
    <section id="wrapper" class="login-register">
        <div class="login-box login-sidebar">
            <div class="white-box">
                <form class="form-horizontal form-material" id="resetform" method="post" action="/password/reset" accept-charset="utf-8">
                    <a href="javascript:void(0)" class="text-center db"><img src="{{url('/')}}/plugins/images/eliteadmin-logo-dark.png" alt="Home" />
                        <br/><img src="{{url('/')}}/plugins/images/eliteadmin-text-dark.png" alt="Home" /></a>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    {!! Form::hidden('token', $token) !!}
                    {!! Form::controlNoLabel('email', 'email', 1, $errors, "Email", 'm-t-40') !!}
                    {!! Form::controlNoLabel('password', 'password', 1, $errors, "Mật khẩu") !!}
                    {!! Form::controlNoLabel('password', 'password_confirmation', 1, $errors, "Nhắc lại mật khẩu") !!}

                    <div class="form-group">
                        <div class="col-md-12">

                        </div>
                        <div class="clearfix"></div>
                        @if(session()->has('error'))
                            @include('partials/error', ['type' => 'danger', 'message' => session('error')])
                        @endif
                    </div>

                    <div class="form-group text-center m-t-20">
                        <div class="col-xs-12">
                            <button class="btn btn-primary btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Reset</button>
                        </div>
                    </div>

                    <div class="form-group m-b-0">
                        <div class="col-sm-12 text-center">
                            <p><a href="/login" class="text-primary m-l-5"><b>Đăng nhập</b></a> ngay</p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- jQuery -->
    <!-- jQuery -->
@endsection