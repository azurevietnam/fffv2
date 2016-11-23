$(':checkbox:checked').prop('checked',false);



 window.addEventListener('resize', function() {
        
    });
 
 // Real Time chart
        

        var data = [],
            totalPoints = 100;

        function getRandomData() {

            if (data.length > 0)
                data = data.slice(1);

            // Do a random walk

            while (data.length < totalPoints) {

                var prev = data.length > 0 ? data[data.length - 1] : 50,
                    y = prev + Math.random() * 10 - 5;

                if (y < 0) {
                    y = 0;
                } else if (y > 100) {
                    y = 100;
                }

                data.push(y);
            }

            // Zip the generated y values with the x values

            var res = [];
            for (var i = 0; i < data.length; ++i) {
                res.push([i, data[i]])
            }

            return res;
        }

        // Set up the control widget

        var updateInterval = 20;
        $("#updateInterval").val(updateInterval).change(function () {
            var v = $(this).val();
            if (v && !isNaN(+v)) {
                updateInterval = +v;
                if (updateInterval < 1) {
                    updateInterval = 1;
                } else if (updateInterval > 2000) {
                    updateInterval = 2000;
                }
                $(this).val("" + updateInterval);
            }
        });





   
         $('.vcarousel').carousel({
            interval: 3000
         })
         $("body").trigger("resize");

		 // Dashboard 1 Morris-chart

//sparkline charts

$(document).ready(function() {
   var sparklineLogin = function() { 
       
  
        $("#sparkline8").sparkline([2,4,4,6,8,5,6,4,8,6,6,2 ], {
            type: 'line',
            width: '100%',
            height: '50',
            lineColor: '#fb9678',
            fillColor: '#fb9678',
            maxSpotColor: '#fb9678',
            highlightLineColor: 'rgba(0, 0, 0, 0.2)',
            highlightSpotColor: '#fb9678'
        });
        $("#sparkline9").sparkline([0,2,8,6,8,5,6,4,8,6,6,2 ], {
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
        $("#sparkline10").sparkline([2,4,4,6,8,5,6,4,8,6,6,2], {
            type: 'line',
            width: '100%',
            height: '50',
            lineColor: '#ab8ce4',
            fillColor: '#ab8ce4',
            maxSpotColor: '#ab8ce4',
            highlightLineColor: 'rgba(0, 0, 0, 0.2)',
            highlightSpotColor: '#ab8ce4'
        });       
   }
    var sparkResize;
 
        $(window).resize(function(e) {
            clearTimeout(sparkResize);
            sparkResize = setTimeout(sparklineLogin, 500);
        });
        sparklineLogin();
	
	
	
	//echart only for homepage
	
	
    require.config({
        paths: {
            echarts: '../plugins/echarts'
        }
    });


    // Configuration
    // ------------------------------

    require(
        [
            'echarts',
            'echarts/theme/limitless',
            'echarts/chart/pie',
            'echarts/chart/funnel',
            'echarts/chart/bar',
            'echarts/chart/line',
        ],
	function (ec, limitless) {
		var basic_bars = ec.init(document.getElementById('basic_bars'), limitless);
		var customer_1 = ec.init(document.getElementById('customer_1'), limitless);
		var customer_2 = ec.init(document.getElementById('customer_2'), limitless);
		var home_adwords = ec.init(document.getElementById('home_adwords'), limitless);
		
		
		basic_bars_options = {
				
				tooltip : {
					trigger: 'axis'
				},
				legend: {
					data:['ADWORDS','TRỰC TIẾP']
				},
				
				calculable : true,
				xAxis : [
					{
						type : 'category',
						boundaryGap : false,
						data : ['1AM','2AM','3AM','4AM','5AM','6AM','7AM','8AM','9AM','10AM','11AM','12AM','1PM','2PM','3PM','4PM','5PM','6PM','7PM','8PM','9PM','10PM','11PM']
					}
				],
				yAxis : [
					{
						type : 'value',
						axisLabel : {
							formatter: '{value} visitors'
						}
					}
				],
				series : [
					{
						name:'ADWORDS',
						type:'line',
						data:[1, 2, 3, 4, 5, 6, 7, 8,9,10,11,12,14,21,32,14,25,16,71,18,19,10,11],
						
					},
					{
						name:'TRỰC TIẾP',
						type:'line',
						data:[11, 12, 13, 14, 15, 16, 17, 18,19,20,21,22,11,12,13,14,15,16,17,18,19,20,21],
						
					}
				
				]
			};
		
			adwords_option = {
				title : {
					text: 'HIỆU XUẤT ADWORDS',
					subtext: '20/11/2016',
					x:'left',
				},
				tooltip : {
					trigger: 'item',
					formatter: "{a} <br/>{b} : {c} ({d}%)"
				},
				legend: {
					y : 'bottom',
					x : 'center',
					data:['PC','MOBILE','TABLET']
				},
				toolbox: {
					show : true,
					feature : {
						saveAsImage : {show: true}
					}
				},
				calculable : true,
				series : [
					{
						name:'Total Click',
						type:'pie',
						radius : ['30%', '70%'],
						itemStyle : {
							 normal : {
									label : {
										position : 'inner',
										formatter : function (params) {                         
										  return (params.percent - 0).toFixed(0) + '%'
										}
									},
								labelLine : {
									show : false
								}
							},
							emphasis : {
								label : {
									show : true,
									position : 'center',
									textStyle : {
										fontSize : '12',
										fontWeight : 'bold'
									}
								}
							}
						},
						data:[
							{value:335, name:'PC'},
							{value:310, name:'MOBILE'},
							{value:234, name:'TABLET'},
						]
					}
				]
			};
								
					
		customer_1_option = {
				title : {
					text: 'CHUYỂN ĐỔI KHÁCH HÀNG',
					subtext: '20/11/2016',
					x:'LEFT',
				},
				tooltip : {
					trigger: 'item',
					formatter: "{a} <br/>{b} : {c}%"
				},
				
				legend: {
					data : ['Chưa định danh','Định Danh','Quan tâm'],
					y : 'bottom',
				},
				calculable : true,
				series : [
					{
						name:'Phân bổ khách hàng',
						type:'funnel',
						width: '30%',
						x: '30%',
						maxSize: '50%',
						data:[
							{value:400, name:'Chưa định danh'},
							{value:80, name:'Định Danh'},
							{value:40, name:'Quan tâm'},
						]
					},
					
				]
			};
		customer_2_option = {
			title : {
					text: 'THU THẬP KHÁCH HÀNG',
					subtext: '20/11/2016',
					x:'left',
				},
			tooltip : {
				trigger: 'axis'
			},
			legend: {
				data:['Chưa định danh','Định Danh'],
				y : 'bottom',
			},
			
			calculable : true,
			xAxis : [
				{
					type : 'category',
					data : ['1AM','2AM','3AM','4AM','5AM','6AM','7AM','8AM','9AM','10AM','11AM','12AM','1PM','2PM','3PM','4PM','5PM','6PM','7PM','8PM','9PM','10PM','11PM']
				}
			],
			yAxis : [
				{
					type : 'value'
				}
			],
			series : [
				{
					name:'Chưa định danh',
					type:'bar',
					data:[2.0, 4.9, 7.0, 23.2, 25.6, 76.7, 135.6, 162.2, 32.6, 20.0, 6.4, 3.3,2.0, 4.9, 7.0, 23.2, 25.6, 76.7, 135.6, 162.2, 32.6, 20.0, 6.4, 3.3],
					markPoint : {
						data : [
							{type : 'max', name: 'Cao nhất'},
							{type : 'min', name: 'Thấp nhất'}
						]
					},
					markLine : {
						data : [
							{type : 'average', name: 'Trung bình'}
						]
					}
				},
				{
					name:'Định Danh',
					type:'bar',
					data:[2.6, 5.9, 9.0, 26.4, 28.7, 70.7, 175.6, 182.2, 48.7, 18.8, 6.0, 2.3,2.6, 5.9, 9.0, 26.4, 28.7, 70.7, 175.6, 182.2, 48.7, 18.8, 6.0, 2.3],
					markPoint : {
						data : [
							{name : 'Cao nhất', value : 182.2, xAxis: 7, yAxis: 183, symbolSize:18},
							{name : 'Thấp nhất', value : 2.3, xAxis: 11, yAxis: 3}
						]
					},
					markLine : {
						data : [
							{type : 'average', name : 'Trung bình'}
						]
					}
				}
			]
		};
													
                    
					
		 basic_bars.setOption(basic_bars_options);
		 customer_1.setOption(customer_1_option);
		 customer_2.setOption(customer_2_option);
		 home_adwords.setOption(adwords_option);
		  window.onresize = function () {
                setTimeout(function (){
                   
                    basic_bars.resize();
                    customer_1.resize();
                    customer_2.resize();
                    home_adwords.resize();
					

                }, 200);
            }


		}
	
	);

});



	
// Slimscroll
 $('.slimscrollcountry').slimScroll({
          height: '250',
          position: 'right',
          size: "5px",
          color: '#dcdcdc',
          
      });