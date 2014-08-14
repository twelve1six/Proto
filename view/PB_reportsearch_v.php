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
				<!-- if user didn't log in, go to login page-->
				<?php
if($this->session->userdata('is_login')) {
				?>
				<li><a href="/index.php/PB_proto_c/logout">Log Out</a></li>
				<?php } else { ?>
				<li>
					<a href="/index.php/PB_proto_c/login">Log In</a>
				</li>
				<?php } ?>
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
	<div class="row">
		&nbsp;
	</div>
	<div class="row">
		&nbsp;
	</div>

	<div class="col-md-5 col-md-offset-1">
		<div class="filter_title col-md-offset-1">
			Search Filter</br>
		</div>

		<!-- <div class="container">
		<form action="" class="form-horizontal"  role="form">
		<div class="form-group">
		<label for="dtp_input2" class="col-md-2 control-label">reception date</label>
		<div class="input-group date form_date col-md-2" data-date="" data-date-format="yyyy-mm-dd" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
		<input class="form-control" size="2" type="text" value="" readonly>
		<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
		</div>
		<input type="hidden" id="dtp_input2" value="" />
		</div>

		</form>
		</div> -->
		<!-- <div class="col-md-offset-1">
		</br>
		&nbsp;&nbsp;Reception date
		</div>
		<div class="row">
		&nbsp;
		</div> -->
		<div class="container">
			<div class="col-md-5 date_from" >
				<div class='col-md-5'>
					<span class="label label-primary date_from">From</span>
					<div class="form-group">
						<!-- <label for="to_date" class="control-label"> &nbsp; </label> -->
						<div class='input-group input-group-sm date form_date' id='from_date' data-date-format="yyyy-mm-dd" data-link-field="from_date" data-link-format="yyyy-mm-dd">
							<input type='text' class="form-control" size="1" />
							<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span> </span>
						</div>
					</div>
				</div>
				<div class='col-md-5 date dateto'>
					<span class="label label-primary date">To</span>
					<div class="form-group">
						<!-- <label for="to_date" class="control-label"> &nbsp; </label> -->
						<div class='input-group input-group-sm date form_date' id='to_date' data-date-format="yyyy-mm-dd" data-link-field="to_date" data-link-format="yyyy-mm-dd">
							<input type='text' class="form-control" size="1"/>
							<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span> </span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			&nbsp;
		</div>

		<div class="col-md-offset-1">
			<form class="form-horizontal" role="form">

				<span class="label label-primary">Hospital</span>
				<div class="form-group">
					<div class="col-md-4">
						<div class="input-group">
							<input type="text" class="form-control" id="hospital" placeholder="Hospital">
							<div class="input-group-btn">
								<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu pull-right dropmenu">
									<li>
										<a href="#">Seoul Univ.</a>
									</li>
									<li>
										<a href="#">Ajou Univ.</a>
									</li>
									<li>
										<a href="#">Busan Univ.</a>
									</li>
									<li>
										<a href="#">Donga Univ.</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>

				<span class="label label-primary">Patology Number</span>
				<div class="form-group">
					<div class="col-md-4">
						<input type="text" class="form-control" id="pathologyNum" placeholder="Pathology Number">
					</div>

					<!-- Split button -->
					<!-- <div class="btn-group dropdown-toggle col-md-offset-1 hospital" >
					<button type="button" class="btn btn-primary dropdown-toggle">
					Hospital
					</button>
					<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
					<span class="caret"></span>
					<span class="sr-only">Toggle Dropdown</span>
					</button>
					<ul class="dropdown-menu" role="menu">
					<li>
					<a href="#">Seoul Univ.</a>
					</li>
					<li>
					<a href="#">Ajou Univ.</a>
					</li>
					<li>
					<a href="#">Busan Univ.</a>
					</li>
					<li>
					<a href="#">Donga Univ.</a>
					</li>
					<li class="divider"></li>
					<li><a href="#">Separated link</a></li>
					</ul>
					</div> -->
				</div>
				<span class="label label-primary">Doctor</span>
				<div class="form-group">
					<div class="col-md-4">
						<input type="text" class="form-control" id="doctor" placeholder="Doctor">
					</div>
				</div>
				<span class="label label-primary">Diagnosis</span>
				<div class="form-group">
					<div class="col-md-4">
						<input type="text" class="form-control" id="diagnosis" placeholder="Diagnosis">
					</div>
				</div>
				<div class="form-group form-inline">
					<div class="input-group col-md-2 t">
						<span class="input-group-addon">T</span>
						<input type="text" class="form-control" id="T">
					</div>

					<div class="input-group col-md-2 m">
						<span class="input-group-addon">M</span>
						<input type="text" class="form-control" id="M">
					</div>

					<div class="input-group col-md-2 p">
						<span class="input-group-addon">P</span>
						<input type="text" class="form-control" id="P">
					</div>
				</div>
				<!-- <div class="form-group form-inline">
				<div class="col-md-1">
				<button type="submit" class="btn btn-primary">
				Search
				</button>
				</div>
				<div class="col-md-2 search_in_result">
				<button type="submit" class="btn btn-primary">
				Search In Results
				</button>
				</div>
				<div class="col-md-1 clear">
				<button type="reset" class="btn btn-primary">
				Clear
				</button>
				</div>
				</div> -->
				<div class="btn-group">
					<button type="submit" class="btn btn-primary">
						Search
					</button>
					<button type="submit" class="btn btn-primary">
						Search In Results
					</button>
					<button type="reset" class="btn btn-primary">
						Clear
					</button>
				</div>
			</form>

		</div>
	</div>
	
	<div class="col-md-6 categoryM">
		<div class="filter_title">
			Category</br>
		</div>
	</div>

	<script type="text/javascript" src="/jquery/jquery-1.8.3.min.js" charset="UTF-8"></script>
	<script type="text/javascript" src="/bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="/customize/js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
	<!-- <script type="text/javascript" src="/customize/js/locales/bootstrap-datetimepicker.ko.js" charset="UTF-8"></script> -->
	<script type="text/javascript">
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

		$('.dropdown-toggle').dropdown();
	</script>

