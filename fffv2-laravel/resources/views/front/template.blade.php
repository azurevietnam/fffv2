<!DOCTYPE html>
<html lang="en">
<head>
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
    <link rel="stylesheet" href="{{url('/')}}/plugins/bower_components/html5-editor/bootstrap-wysihtml5.css" />

    <link href="{{url('/')}}/plugins/bower_components/summernote/dist/summernote.css" rel="stylesheet" />


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

</head>

  <body>

    <header>


    </header>

    <main>
        <?php $left_menu = "small"; ?>

        <!-- Preloader -->
        <div class="preloader">
            <div class="cssload-speeding-wheel"></div>
        </div>
        @if(session()->has('ok'))
            @include('partials/error', ['type' => 'success', 'message' => session('ok')])
        @endif
        @if(session()->has('error'))
            @include('partials/error', ['type' => 'danger', 'message' => session('error')])
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

            <!-- google maps api -->
            <!-- Sparkline charts -->
            <script src="{{url('/')}}/plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js"></script>
            <!-- EASY PIE CHART JS -->
            <script src="{{url('/')}}/plugins/bower_components/jquery.easy-pie-chart/dist/jquery.easypiechart.min.js"></script>
            <script src="{{url('/')}}/plugins/bower_components/jquery.easy-pie-chart/easy-pie-chart.init.js"></script>
            <!-- Custom Theme JavaScript -->

            <script src="{{url('/')}}/plugins/bower_components/moment/moment.js"></script>
            <script src="{{url('/')}}/plugins/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>

            <script src="{{url('/')}}/plugins/bower_components/datatables/jquery.dataTables.min.js"></script>

            <!--EChart JavaScript -->
            <script type="text/javascript" src="{{url('/')}}/plugins/echarts/echarts.js"></script>

            <script src="{{url('/')}}/plugins/bower_components/html5-editor/wysihtml5-0.3.0.js"></script>
            <script src="{{url('/')}}/plugins/bower_components/html5-editor/bootstrap-wysihtml5.js"></script>



            <? if (@$left_menu == "small"){?>
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
                setTimeout(function(){
                    try {
                        $('#partial_display').slideUp("slow");
                        //$('#partial_close_button').trigger('click');
                    }
                    catch(err) {

                    }
                }, 8000);

                $('.input-daterange-datepicker').daterangepicker({
                    buttonClasses: ['btn', 'btn-sm'],
                    applyClass: 'btn-info',
                    cancelClass: 'btn-inverse'
                });
                // Colorpicker


                $(".colorpicker").asColorPicker({
                    hideInput: true,
                    hideFireChange: false,
                    onChange: function(hsb, hex, rgb){
                        $(".pannel-chatbox-heading").attr("style", "background-color: "+ hsb +" !important");
                        $(".pannel-chatbox-input").attr("style", "background-color: "+ hsb +" ; border:1px "+ hsb +" solid");


                    }
                });


                function showcolor(){
                    console.log($(this).val());
                }

                $(document).ready(function () {

                    $('.textarea_editor').wysihtml5();


                });
            </script>
    </footer>

    @yield('scripts')

  </body>
</html>