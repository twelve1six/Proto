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
				<li>
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
				<li class="dropdown active">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Send Report<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="/index.php/PB_proto_c/sreport_mlclr">Molecular</a></li>
            <li class="divider"></li>
            <li><a href="/index.php/PB_proto_c/sreport_if">IF</a></li>
            <li class="divider"></li>
            <li><a href="/index.php/PB_proto_c/sreport_em">EM</a></li>
          </ul>
        </li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
					<li>
						<a href="/index.php/PB_proto_c/signup">Sign Up</a>
					</li>
				</ul>
		</div><!-- /.navbar-collapse -->
	</div>

	<div class="container-fluid container-fluid-banner">
		<div class="banner">
			Molecular
		</div>
	</div>
	<div class="row">
		&nbsp;
	</div>

	<div class="col-md-5">
		<div class="col-md-7">
			<div class="panel panel-info">
				<div class="panel-heading">
					<div class="filter_title panel-title">
						Search Filter</br>
					</div>
				</div>
				<div class="panel-body">
					<form class="form-inline" role="form">
						<div class="form-group">
							<div class='input-group input-group-sm date form_date' id='from_date' data-date-format="yyyy-mm-dd" data-link-field="from_date" data-link-format="yyyy-mm-dd" >
								<input type='text' class="form-control input-sm" size="8" placeholder="From" />
								<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span> </span>
							</div>
						</div>
						<div class="form-group">
							<div class='input-group input-group-sm date form_date' id='to_date' data-date-format="yyyy-mm-dd" data-link-field="to_date" data-link-format="yyyy-mm-dd">
								<input type='text' class="form-control input-sm" size="8" placeholder="To"/>
								<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span> </span>
							</div>
						</div>
						<div class="row">
							&nbsp;
						</div>
					</form>
					<form class="form-horizontal" role="form">

						<div class="form-group">
							<div class="col-md-7">
								<span class="label label-primary">Hospital</span>
								<select class="form-control input-sm">
									<option> Seoul Univ. </option>
									<option> Ajou Univ. </option>
									<option> Busan Univ. </option>
									<option> Donga Univ. </option>
								</select>
							</div>
						</div>

						<span class="label label-primary">Pathology Number</span>
						<form class="form-inline" role="from">
							<div class="form-group">
								<div class="col-md-7">
									<input type="text" class="form-control input-sm" id="pathologyNum" placeholder="Pathology Number">
								</div>

								<button type="submit" class="btn btn-primary btn-sm search">
									Search
								</button>
						</form>
				</div>
			</div>
		</div>
	</div>