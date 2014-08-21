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
				<li class="dropdown">
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
		<div class="panel panel-info">
			<div class="panel-heading">
				<div class="filter_title panel-title">
					Search Filter</br>
				</div>
			</div>
			<div class="panel-body">
				<form class="form-inline" role="form">
					<div class="form-group col-md-3">
						<div class='input-group input-group-sm date form_date' id='from_date' data-date-format="yyyy-mm-dd" data-link-field="from_date" data-link-format="yyyy-mm-dd" >
							<input type='text' class="form-control input-sm" size="8" placeholder="From" />
							<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span> </span>
						</div>
					</div>
					<div class="form-group col-md-3">
						<div class='input-group input-group-sm date form_date' id='to_date' data-date-format="yyyy-mm-dd" data-link-field="to_date" data-link-format="yyyy-mm-dd">
							<input type='text' class="form-control input-sm" size="8" placeholder="To"/>
							<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span> </span>
						</div>
					</div>

					<!-- </div> -->
					<!-- </div> -->
					<div class="row">
						&nbsp;
					</div>
				</form>
				<!-- </div> -->
				<div class="row">
					&nbsp;
				</div>
					<form class="form-horizontal" role="form">

						<div class="form-group">
							<div class="col-md-4">
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
						<div class="form-group">
							<div class="col-md-4">
								<input type="text" class="form-control input-sm" id="pathologyNum" placeholder="Pathology Number">
							</div>
						</div>
				<div class="col-md-12">
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
						</form>
					</div>
				</div>
			</div>
		</div>
