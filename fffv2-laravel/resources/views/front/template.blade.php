<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">

    <head>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" type="image/png" sizes="16x16" href="{{url('/')}}/plugins/images/favicon.png">
        <title>FFF - This is title</title>
        <!-- Bootstrap Core CSS -->
        <link href="{{url('/')}}/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Menu CSS -->
        <link href="{{url('/')}}/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
        <link href="{{url('/')}}/plugins/bower_components/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
        <link href="https://cdn.datatables.net/buttons/1.2.2/css/buttons.dataTables.min.css" rel="stylesheet" type="text/css" />


        <link href="{{url('/')}}/plugins/bower_components/bootstrap-datepicker/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css" />
        <!-- Daterange picker plugins css -->
        <link href="{{url('/')}}/plugins/bower_components/timepicker/bootstrap-timepicker.min.css" rel="stylesheet">
        <link href="{{url('/')}}/plugins/bower_components/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">


        <!-- Color picker plugins css -->
        <link href="{{url('/')}}/plugins/bower_components/jquery-asColorPicker-master/css/asColorPicker.css" rel="stylesheet">



        <!-- MAP -->
        <link href="{{url('/')}}/plugins/bower_components/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
        <!-- animation CSS -->
        <link href="{{url('/')}}/css/animate.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="{{url('/')}}/css/style.css" rel="stylesheet">

        <!-- color CSS -->

        <!-- color CSS -->
        <link href="{{url('/')}}/css/colors/blue.css" id="theme" rel="stylesheet">
        <script src="{{url('/')}}/plugins/bower_components/jquery/dist/jquery.min.js"></script>
        <link href="{{url('/')}}/css/fff.css" rel="stylesheet">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>

        <![endif]-->

        <!--
        {!! HTML::style('css/front.css') !!}
        {!! HTML::script('https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js') !!}
        {!! HTML::script('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js') !!}
            -->

    </head>

  <body>

    <header>


    </header>

    <main>
        <?php $left_menu = ""; ?>

        <!-- Preloader -->
        <div class="preloader">
            <div class="cssload-speeding-wheel"></div>
        </div>
        @if(session()->has('ok'))
            @include('partials/error', ['type' => 'success', 'message' => session('ok')])
        @endif
        @if(isset($info))
            @include('partials/error', ['type' => 'info', 'message' => $info])
        @endif

        @yield('main')
    </main>

    <footer>
        @yield('footer')
        <!-- Bootstrap Core JavaScript -->
            <script src="{{url('/')}}/bootstrap/dist/js/bootstrap.min.js"></script>
            <!-- Menu Plugin JavaScript -->
            <script src="{{url('/')}}/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
            <!--slimscroll JavaScript -->
            <script src="{{url('/')}}/js/jquery.slimscroll.js"></script>
            <!--Wave Effects -->
            <script src="{{url('/')}}/js/waves.js"></script>
            <!-- Flot Charts JavaScript -->
            <script src="{{url('/')}}/plugins/bower_components/flot/jquery.flot.js"></script>
            <script src="{{url('/')}}/plugins/bower_components/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
            <!-- google maps api -->
            <!-- Sparkline charts -->
            <script src="{{url('/')}}/plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js"></script>
            <!-- EASY PIE CHART JS -->
            <script src="{{url('/')}}/plugins/bower_components/jquery.easy-pie-chart/dist/jquery.easypiechart.min.js"></script>
            <script src="{{url('/')}}/plugins/bower_components/jquery.easy-pie-chart/easy-pie-chart.init.js"></script>
            <!-- Custom Theme JavaScript -->

            <script src="{{url('/')}}/plugins/bower_components/moment/moment.js"></script>
            <script src="{{url('/')}}/plugins/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>


            <!--EChart JavaScript -->
            <script type="text/javascript" src="{{url('/')}}/plugins/echarts/echarts.js"></script>



            <? if ($left_menu == "small"){?>
            <script src="{{url('/')}}/js/slider-bar.min.js"></script>
            <?}else{?>
            <script src="{{url('/')}}/js/custom.min.js"></script>
            <?}?>
            <script src="{{url('/')}}/js/dashboard2.js"></script>
            <!--Style Switcher -->
            <script src="{{url('/')}}/plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
            <!--Style Switcher -->
            <script src="{{url('/')}}/plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>

            <!-- Color Picker Plugin JavaScript -->
            <script src="{{url('/')}}/plugins/bower_components/jquery-asColorPicker-master/libs/jquery-asColor.js"></script>
            <script src="{{url('/')}}/plugins/bower_components/jquery-asColorPicker-master/libs/jquery-asGradient.js"></script>
            <script src="{{url('/')}}/plugins/bower_components/jquery-asColorPicker-master/dist/jquery-asColorPicker.min.js"></script>

            <script>

                $('.input-daterange-datepicker').daterangepicker({
                    buttonClasses: ['btn', 'btn-sm'],
                    applyClass: 'btn-info',
                    cancelClass: 'btn-inverse'
                });
                // Colorpicker
                $(".colorpicker").asColorPicker({
                    onChange: function(hsb, hex, rgb){
                        $(".pannel-chatbox-heading").attr("style", "background-color: "+ hsb +" !important");
                        $(".pannel-chatbox-input").attr("style", "background-color: "+ hsb +" ; border:1px "+ hsb +" solid");


                    }
                });
                $(".complex-colorpicker").asColorPicker({
                    mode: 'complex'
                });
                function showcolor(){
                    console.log($(this).val());
                }


            </script>
    </footer>

    @yield('scripts')

  </body>
</html>