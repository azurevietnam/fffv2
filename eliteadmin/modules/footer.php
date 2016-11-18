
        <!-- Bootstrap Core JavaScript -->
        <script src="bootstrap/dist/js/bootstrap.min.js"></script>
        <!-- Menu Plugin JavaScript -->
        <script src="../plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
        <!--slimscroll JavaScript -->
        <script src="js/jquery.slimscroll.js"></script>
        <!--Wave Effects -->
        <script src="js/waves.js"></script>
        <!-- Flot Charts JavaScript -->
        <script src="../plugins/bower_components/flot/jquery.flot.js"></script>
        <script src="../plugins/bower_components/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
        <!-- google maps api -->
        <!-- Sparkline charts -->
        <script src="../plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js"></script>
        <!-- EASY PIE CHART JS -->
        <script src="../plugins/bower_components/jquery.easy-pie-chart/dist/jquery.easypiechart.min.js"></script>
        <script src="../plugins/bower_components/jquery.easy-pie-chart/easy-pie-chart.init.js"></script>
        <!-- Custom Theme JavaScript -->

		<script src="../plugins/bower_components/moment/moment.js"></script>
		<script src="../plugins/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>


		<!--EChart JavaScript -->
		<script type="text/javascript" src="../plugins/echarts/echarts.js"></script>
		
<script src="../plugins/bower_components/html5-editor/wysihtml5-0.3.0.js"></script>
<script src="../plugins/bower_components/html5-editor/bootstrap-wysihtml5.js"></script>

	
        
		<? if ($left_menu == "small"){?>
			<script src="js/slider-bar.min.js"></script>
		<?}else{?>
			<script src="js/custom.min.js"></script>
		<?}?>
        <script src="js/dashboard2.js"></script>
        <!--Style Switcher -->
        <script src="../plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
<!--Style Switcher -->
	<script src="../plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
	
    <!-- Color Picker Plugin JavaScript -->
    <script src="../plugins/bower_components/jquery-asColorPicker-master/libs/jquery-asColor.js"></script>
    <script src="../plugins/bower_components/jquery-asColorPicker-master/libs/jquery-asGradient.js"></script>
    <script src="../plugins/bower_components/jquery-asColorPicker-master/dist/jquery-asColorPicker.min.js"></script>

<script>

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

</body>


</html> 