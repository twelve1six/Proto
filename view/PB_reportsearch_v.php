<nav class="navbar navbar-default" role="navigation">
	<div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<p class="navbar-brand">
				iPIMS
			</p>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav">
					<?php 
						if($this->session->userdata('is_login')) {
					?>		
						<li><a href="/index.php/PB_proto_c/logout">Log Out</a></li>				
					<?php
					} else {
					?>
						<li><a href="/index.php/PB_proto_c/login">Log In</a></li>				
					<?php
					}
					?>
				<li> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; </li>
				<li class="active">
					<a href="/index.php/PB_proto_c/rsearch">Report Search</a>
				</li>
				<li>
					<a href="/index.php/PB_proto_c/preport">Pathology Report</a>
				</li>
				<li>
					<a href="/index.php/PB_proto_c/isearch">Image Search</a>
				</li>
				<li>
					<a href="/index.php/PB_proto_c/prvlibrary">Private Library</a>
				</li>
				<li>
					<a href="/index.php/PB_proto_c/Pbllibrary">Public Library</a>
				</li>
				<li>
					<a href="/index.php/PB_proto_c/messenger">Messenger</a>
				</li>
				<li>
					<a href="/index.php/PB_proto_c/sreport">Send Report</a>
				</li>
			</ul>
		</div><!-- /.navbar-collapse -->
	</div> 
	
	<div class="container-fluid container-fluid-banner">
		<div class="banner">
			Report Search
		</div>
	</div>
<div class="searchfilter">
 <div class="modal custom show">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            
        <h4 class="modal-title">Search Filter</h4>
         </div>
         <div class="modal-body">
          <p>One fine body&hellip;</p>
      </div>
      <div class="modal-footer">
      	<button type="button" class="btn btn-primary">Search</button>
        <button type="button" class="btn btn-primary">Search within results</button>
        <button type="button" class="btn btn-primary">Clear</button>
      </div>
      </div>
    </div>
</div>
   <!-- <div class="container-fluid">
    <form action="" class="form-horizontal"  role="form">
			<div class="form-group">
                <label for="dtp_input2" class="col-md-2 control-label">Date Picking</label>
                <div class="input-group date form_date col-md-3" data-date="" data-date-format="yyyy-mm-dd" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
                    <input class="form-control" size="8" type="text" value="" readonly>
                    <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
					<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                </div>
				<input type="hidden" id="dtp_input2" value="" /><br/>
            </div>
    </form>
</div>


<script type="text/javascript" src="/jquery/jquery-1.8.3.min.js" charset="UTF-8"></script>
<script type="text/javascript" src="/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/customize/js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
<script type="text/javascript" src="/customize/js/locales/bootstrap-datetimepicker.ko.js" charset="UTF-8"></script>
<script type="text/javascript">
	$('.form_date').datetimepicker({
        //language:  'ko',
        weekStart: 1,
        todayBtn:  1,
		autoclose: 1,
		todayHighlight: 1,
		startView: 2,
		minView: 2,
		forceParse: 0
    });
</script>
      -->