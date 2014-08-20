<script src="http://code.jquery.com/jquery.js"></script>
<script src="/bootstrap/js/bootstrap.min.js"></script>
<!-- <script src="netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script> -->
<script src="/customize/js/bootstrap-datetimepicker.de.js" charset="UTF-8"></script>
<script type="text/javascript" src="/jquery/jquery-1.8.3.min.js" charset="UTF-8"></script>
<script type="text/javascript" src="/customize/js/bootstrap-multiselect.js"></script>

<script type="text/javascript" src="/jquery/jquery-1.8.3.min.js" charset="UTF-8"></script>
<script type="text/javascript" src="/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/customize/js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
<script type="text/javascript" src="/customize/js/bootstrap-multiselect.js"></script>
<!-- <script type="text/javascript" src="/customize/js/acc-wizard.min.js"></script> -->
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
	

</script>
</body>
</html>