<div class="col-md-4 col-sm-12 col-xs-12">
    <div class="white-box">
        <h3 class="box-title">
            @if($web_increase == true)
                <small class="pull-right m-t-10 text-success"><i class="fa fa-sort-asc"></i> Tăng {{$web_increase_val}}% so với hôm qua  </small>
            @else
                <small class="pull-right m-t-10 text-danger"><i class="fa fa-sort-desc"></i> Giảm {{$web_increase_val}}% so với hôm qua  </small>
            @endif
             WEBSITE TRAFFIC
        </h3>
        <div class="stats-row">
            <div class="stat-item">
                <h6>PC</h6> <b>{{$traffic["pc"]}}%</b></div>
            <div class="stat-item">
                <h6>Mobile</h6> <b>{{$traffic["tablet"]}}%</b></div>
            <div class="stat-item">
                <h6>Tablet</h6> <b>{{$traffic["phone"]}}%</b></div>
        </div>
        <div id="sparkline8"></div>
    </div>
</div>
<div class="col-md-4 col-sm-12 col-xs-12">
    <div class="white-box">
        <h3 class="box-title">
            @if($click_increase == true)
                <small class="pull-right m-t-10 text-success"><i class="fa fa-sort-asc"></i> Tăng {{$click_increase_val}}% so với hôm qua  </small>
            @else
                <small class="pull-right m-t-10 text-danger"><i class="fa fa-sort-desc"></i> Giảm {{$click_increase_val}}% so với hôm qua  </small>
            @endif
            CLICK ẢO
        </h3>
        <div class="stats-row">
            <div class="stat-item">
                <h6>PC</h6> <b>{{$click["pc"]}}%</b></div>
            <div class="stat-item">
                <h6>Mobile</h6> <b>{{$click["tablet"]}}%</b></div>
            <div class="stat-item">
                <h6>Tablet</h6> <b>{{$click["phone"]}}%</b></div>
        </div>
        <div id="sparkline9"></div>
    </div>
</div>
<div class="col-md-4 col-sm-12 col-xs-12">
    <div class="white-box" style="min-height:215px">
        <h3 class="box-title"><i class="ti-cut text-danger"></i> TIẾT KIỆM ƯỚC TÍNH</h3>
        <div class="text-right"> <span class="text-muted">Tiết kiệm từ đầu tháng</span>
            <h1><sup><i class="ti-arrow-down text-danger"></i></sup> {{number_format($save_click)}} VND</h1>
        </div>
        <span class="text-danger">Tiết kiệm {{$save_percent}}%</span>
        <div class="progress m-b-0">
            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="{{$save_percent}}" aria-valuemin="0" aria-valuemax="100" style="width:{{$save_percent}}%;"> <span class="sr-only">{{$save_percent}}% Complete</span> </div>
        </div>
    </div>
</div>

<script>
    var sparklineLogin = function() {
        //alert("{{$real_data_traffic}}");
        var real_data_traffic = $.parseJSON("{{$real_data_traffic}}");
        var real_data_click = $.parseJSON("{{$real_data_click}}");

        $("#sparkline8").sparkline(real_data_traffic, {
            type: 'line',
            width: '100%',
            height: '50',
            lineColor: '#fb9678',
            fillColor: '#fb9678',
            maxSpotColor: '#fb9678',
            highlightLineColor: 'rgba(0, 0, 0, 0.2)',
            highlightSpotColor: '#fb9678'
        });
        $("#sparkline9").sparkline(real_data_click, {
            type: 'line',
            width: '100%',
            height: '50',
            lineColor: '#01c0c8',
            fillColor: '#01c0c8',
            minSpotColor:'#01c0c8',
            maxSpotColor: '#01c0c8',
            highlightLineColor: 'rgba(0, 0, 0, 0.2)',
            highlightSpotColor: '#01c0c8'
        });
    }
    var sparkResize;

    $(window).resize(function(e) {
        clearTimeout(sparkResize);
        sparkResize = setTimeout(sparklineLogin, 500);
    });
    sparklineLogin();
</script>
