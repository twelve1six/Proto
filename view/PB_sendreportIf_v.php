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
		</div><!-- /.navbar-collapse -->
	</div>

	<div class="container-fluid container-fluid-banner">
		<div class="banner">
			Immunofluorescence
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
	<div class="col-md-5">
		<div class="panel panel-info">
			<div class="panel-heading">
				<div class="filter_title panel-title">
					Send
				</div>
			</div>
			<div class="panel-body">
				<form class="form-horizontal" role="form">
					<div class="form-group">
							<div class="col-md-11">
								<span class="label label-primary">Hospital</span>
								<select class="form-control input-sm">
									<option> Seoul Univ. </option>
									<option> Ajou Univ. </option>
									<option> Busan Univ. </option>
									<option> Donga Univ. </option>
								</select>
							</div>
						</div>
					<!-- <div class="input-group">
						<input type="text" class="form-control input-sm" id="id" placeholder="ID">
						<span class="input-group-btn">
							<button type="submit" class="btn btn-primary btn-sm">
								&nbsp;Search&nbsp;
							</button> </span>
					</div> -->
					<span class="label label-primary">ID</span>
					<div class="form-group">
								<div class="col-md-11">
									<input type="text" class="form-control input-sm" id="id" placeholder="ID">
								</div>
					</div>
					<div class="input-group">
						<button type="submit" class="btn btn-primary btn-sm search">
							Send
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	<div class="col-md-12">
	<div class="panel panel-info">
			<div class="panel-heading">
				<div class="filter_title panel-title">
					List
				</div>
			</div>
			<div class="panel-body">
				<div class="form-group">
					<div class="table-responsive">
						<table class="table table-bordered table-hover table-condensed">
							<tr>
								<th>Pathology Num</th>
								<th>Name</th>
								<th>Registration Num</th>
								<th>Reception date</th>
								<th>S Num</th>
							</tr>
							<tr>
								<?php $Pnum = 'F 13-0000041';
								$name = '허노인';
								$Rnum = 21839283;
								$Rdate = '2013-06-04';
								$data = 'F 13-0000043';

								echo '<td>' . $Pnum . '</td>';
								echo '<td>' . $name . '</td>';
								echo '<td>' . $Rnum . '</td>';
								echo '<td>' . $Rdate . '</td>';
								echo '<td>' . $data . '</td>';
								?>
							</tr>
							<tr>
								<?php $Pnum = 'F 13-0000041';
								$name = '허노인';
								$Rnum = 21839283;
								$Rdate = '2013-06-04';
								$data = 'F 13-0000043';

								echo '<td>' . $Pnum . '</td>';
								echo '<td>' . $name . '</td>';
								echo '<td>' . $Rnum . '</td>';
								echo '<td>' . $Rdate . '</td>';
								echo '<td>' . $data . '</td>';
								?>
							</tr>
							<tr>
								<?php $Pnum = 'F 13-0000041';
								$name = '허노인';
								$Rnum = 21839283;
								$Rdate = '2013-06-04';
								$data = 'F 13-0000043';

								echo '<td>' . $Pnum . '</td>';
								echo '<td>' . $name . '</td>';
								echo '<td>' . $Rnum . '</td>';
								echo '<td>' . $Rdate . '</td>';
								echo '<td>' . $data . '</td>';
								?>
							</tr>
							<tr>
								<?php $Pnum = 'F 13-0000041';
								$name = '허노인';
								$Rnum = 21839283;
								$Rdate = '2013-06-04';
								$data = 'F 13-0000043';

								echo '<td>' . $Pnum . '</td>';
								echo '<td>' . $name . '</td>';
								echo '<td>' . $Rnum . '</td>';
								echo '<td>' . $Rdate . '</td>';
								echo '<td>' . $data . '</td>';
								?>
							</tr>

							<tr>
								<?php $Pnum = 'F 13-0000041';
								$name = '허노인';
								$Rnum = 21839283;
								$Rdate = '2013-06-04';
								$data = 'F 13-0000043';

								echo '<td>' . $Pnum . '</td>';
								echo '<td>' . $name . '</td>';
								echo '<td>' . $Rnum . '</td>';
								echo '<td>' . $Rdate . '</td>';
								echo '<td>' . $data . '</td>';
								?>
							</tr>
							<tr>
								<?php $Pnum = 'F 13-0000041';
								$name = '허노인';
								$Rnum = 21839283;
								$Rdate = '2013-06-04';
								$data = 'F 13-0000043';

								echo '<td>' . $Pnum . '</td>';
								echo '<td>' . $name . '</td>';
								echo '<td>' . $Rnum . '</td>';
								echo '<td>' . $Rdate . '</td>';
								echo '<td>' . $data . '</td>';
								?>
							</tr>
						</table>
					</div>
				</div>
			</div>

			</form>
		</div> 
		</div>
	</div>
	<div class="col-md-7">
		<div class="panel panel-info">
			<div class="panel-heading">
				<div class="filter_title panel-title">
					Images
				</div>
			</div>
			<div class="panel-body">
				<div class="col-md-2">
					<a href="#" class="thumbnail"> <img src="../../image/1.jpg" width="400"/> </a>
				</div>
				<div class="col-md-2">
					<a href="#" class="thumbnail"> <img src="../../image/2.jpg" width="400"/> </a>
				</div>
				<div class="col-md-2">
					<a href="#" class="thumbnail"> <img src="../../image/3.jpg" width="400"/> </a>
				</div>
				<div class="col-md-2">
					<a href="#" class="thumbnail"> <img src="../../image/4.jpg" width="400"/> </a>
				</div>
				<div class="col-md-2">
					<a href="#" class="thumbnail"> <img src="../../image/5.jpg" width="400"/> </a>
				</div>
			</div>
		</div>
		<div class="panel panel-info">
			<div class="panel-heading">
				<div class="filter_title panel-title">
					Kidney
				</div>
			</div>
			<div class="panel-body">
				<div class="control-group">
					<div id="Kidney" class="controls">
						<input type="radio" name="Kidney" value="lgG" id="lgG">
						<span class="label label-primary">lgG</span>
						<input type="radio" name="Kidney" value="lgM" id="lgM">
						<span class="label label-primary">lgM</span>
						<input type="radio" name="Kidney" value="lgA" id="lgA">
						<span class="label label-primary">lgA</span>
						<input type="radio" name="Kidney" value="C3" id="C3">
						<span class="label label-primary">C3</span>
						<input type="radio" name="Kidney" value="C1q" id="C1q">
						<span class="label label-primary">C1q</span>
						<input type="radio" name="Kidney" value="Kappa" id="Kappa">
						<span class="label label-primary">Kappa</span>
						<input type="radio" name="Kidney" value="Lambda" id="Lambda">
						<span class="label label-primary">Lambda</span>
						<input type="radio" name="Kidney" value="C4d" id="C4d">
						<span class="label label-primary">C4d</span>
						<input type="radio" name="Kidney" value="nothing" id="nothing">
						<span class="label label-primary">nothing</span>
					</div>
				</div>
			</div>
		</div>
			<div class="panel panel-info">
				<div class="panel-heading">
					<div class="filter_title panel-title">
						Skin Direct IF
					</div>
				</div>
				<div class="panel-body">
					<div class="control-group">
						<div id="skinDirectIF" class="controls">
							<input type="radio" name="skinDirectIF" value="lgG" id="lgG">
							<span class="label label-primary">lgG</span>
							<input type="radio" name="skinDirectIF" value="lgM" id="lgM">
							<span class="label label-primary">lgM</span>
							<input type="radio" name="skinDirectIF" value="lgA" id="lgA">
							<span class="label label-primary">lgA</span>
							<input type="radio" name="skinDirectIF" value="C3" id="C3">
							<span class="label label-primary">C3</span>
							<input type="radio" name="skinDirectIF" value="C1g" id="C1g">
							<span class="label label-primary">C1g</span>
							<input type="radio" name="skinDirectIF" value="nothing" id="nothing">
							<span class="label label-primary">nothing</span>
						</div>
					</div>
				</div>
			</div>