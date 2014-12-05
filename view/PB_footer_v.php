<script src="http://code.jquery.com/jquery.js"></script>
<script src="/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/jquery/jquery-1.8.3.min.js" charset="UTF-8"></script>
<script type="text/javascript" src="/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/customize/js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
<script type="text/javascript" src="/customize/js/bootstrap-multiselect.js"></script>
<script type="text/javascript">
	//calender plugin
	$('.form_date').datetimepicker({
		//language:  'ko',
		weekStart : 1,
		todayBtn : 1,
		autoclose : 1,
		todayHighlight : 1,
		startView : 2,
		minView : 2,
		forceParse : 0
	});

	//dropdown plugin
	$('.dropdown-toggle').dropdown();

	//multiselect plugin maybe not work
	$('.multiselect').multiselect();

	//tooltip plugin
	$('[rel="tooltip"]').tooltip('toggle');
	$('[rel="tooltip"]').tooltip('hide');

	//accordian plugin
	// $(window).load(function() {
	// $(".acc-wizard").accwizard();
	// });

	//tap plugin
	$('#myTab a').click(function(e) {
		e.preventDefault()
		$(this).tab('show')
	})
	
	//pop up window for submit(post)
	function fn_open() {
		var form = document.frm;
		window.open("", "popup", "width=500, height=300");
		form.target = "popup";
		// 폼의 타겟을 'popup'으로  합니다.
		form.action = "http://192.168.0.20:8085/Ben_test/sample.php";
		form.method = "post";
		form.submit();

	}
</script>
</body>
</html>