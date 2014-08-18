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

	<div class="col-md-5">
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
										<a href="#"> <span class="badge pull-right">4</span> Seoul Univ.</a>
									</li>
									<li>
										<a href="#"> <span class="badge pull-right">3</span> Ajou Univ.</a>
									</li>
									<li>
										<a href="#"> <span class="badge pull-right">2</span> Busan Univ.</a>
									</li>
									<li>
										<a href="#"> <span class="badge pull-right">1</span> Donga Univ.</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>

				<span class="label label-primary">Pathology Number</span>
				<div class="form-group">
					<div class="col-md-4">
						<input type="text" class="form-control" id="pathologyNum" placeholder="Pathology Number">
					</div>
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

		<div class ="btn-toolbar categoryB" select multiple="multiple">
			<div class="btn-group" select multiple="multiple">
				<button type="button" class = "btn btn-primary">
					ALL
				</button>
				<button type="button" class = "btn btn-primary">
					S
				</button>
				<button type="button" class = "btn btn-primary">
					C
				</button>
			</div>
			<div class="btn-group">
				<button type="button" class = "btn btn-primary">
					P
				</button>
				<button type="button" class = "btn btn-primary">
					AC
				</button>
				<button type="button" class = "btn btn-primary">
					PC
				</button>
			</div>
			<div class="btn-group">
				<button type="button" class = "btn btn-primary">
					PA
				</button>
				<button type="button" class = "btn btn-primary">
					M
				</button>
				<button type="button" class = "btn btn-primary">
					IF
				</button>
				<button type="button" class = "btn btn-primary">
					E
				</button>
				<button type="button" class = "btn btn-primary">
					RC
				</button>
				<button type="button" class = "btn btn-primary">
					CA
				</button>
			</div>
		</div>
		<table class="table table-bordered table-hover table-condensed">
			<tr>
				<th>Pathology&nbsp;Number</th>
				<th>G</th>
				<th>M</th>
				<th>V</th>
				<th>Register&nbsp;Number</th>
				<th>&nbsp;Name&nbsp;</th>
				<th>Gender</th>
				<th>Age</th>
				<th>&nbsp;Birth&nbsp;Date&nbsp;</th>
				<th>Reception&nbsp;Date</th>
				<th>Result&nbsp;Date</th>
				<th>&nbsp;&nbsp;Doctor&nbsp;&nbsp;</th>
			</tr>
			
				<?php
				//translate mark and space of string for html 
				$msg = '<동결절편> 동결절편 조직은 1.0*0.6*0.5cm and 1.2 * 0.6 * 0.5cm 크기의 림프절 2개임.';
				$msg = htmlspecialchars($msg, ENT_NOQUOTES);				
				$tooltip = str_replace(" ", "&nbsp;", $msg);
			echo '<tr rel="tooltip" data-placement="right" data-original-title=' . $tooltip . ' data-container="body">';
		?>
			<td>F 13-0000041</td>
			<td>5</td>
			<td>1</td>
			<td>0</td>
			<td>14761861</td>
			<td>장필순</td>
			<td>F</td>
			<td>59</td>
			<td>1953-09-02</td>
			<td>2013-04-04 16:07</td>
			<td>2013-04-12 14:18</td>
			<td>찰리/유먼</td>
			</tr>

			<?php $tooltip = 'blahblah';
			echo '<tr rel="tooltip" data-placement="right" data-original-title=' . $tooltip . ' data-container="body">';
		?>
			<td>G 13-0000041</td>
			<td>5</td>
			<td>1</td>
			<td>0</td>
			<td>14761861</td>
			<td>이이언</td>
			<td>F</td>
			<td>59</td>
			<td>1953-09-02</td>
			<td>2013-04-04 16:07</td>
			<td>2013-04-12 14:18</td>
			<td>찰리</td>

			</tr>
			<?php $tooltip = 'blahblah';
			echo '<tr rel="tooltip" data-placement="right" data-original-title=' . $tooltip . ' data-container="body">';
		?>
			<td>G 13-0000041</td>
			<td>5</td>
			<td>1</td>
			<td>0</td>
			<td>14761861</td>
			<td>이이언</td>
			<td>F</td>
			<td>59</td>
			<td>1953-09-02</td>
			<td>2013-04-04 16:07</td>
			<td>2013-04-12 14:18</td>
			<td>찰리</td>

			</tr>
			<?php $tooltip = 'blahblah';
			echo '<tr rel="tooltip" data-placement="right" data-original-title=' . $tooltip . ' data-container="body">';
		?>
			<td>G 13-0000041</td>
			<td>5</td>
			<td>1</td>
			<td>0</td>
			<td>14761861</td>
			<td>이이언</td>
			<td>F</td>
			<td>59</td>
			<td>1953-09-02</td>
			<td>2013-04-04 16:07</td>
			<td>2013-04-12 14:18</td>
			<td>찰리</td>

			</tr>
			<?php $tooltip = 'blahblah';
			echo '<tr rel="tooltip" data-placement="right" data-original-title=' . $tooltip . ' data-container="body">';
		?>
			<td>G 13-0000041</td>
			<td>5</td>
			<td>1</td>
			<td>0</td>
			<td>14761861</td>
			<td>이이언</td>
			<td>F</td>
			<td>59</td>
			<td>1953-09-02</td>
			<td>2013-04-04 16:07</td>
			<td>2013-04-12 14:18</td>
			<td>찰리</td>

			</tr>
			<?php $tooltip = 'blahblah';
			echo '<tr rel="tooltip" data-placement="right" data-original-title=' . $tooltip . ' data-container="body">';
		?>
			<td>G 13-0000041</td>
			<td>5</td>
			<td>1</td>
			<td>0</td>
			<td>14761861</td>
			<td>이이언</td>
			<td>F</td>
			<td>59</td>
			<td>1953-09-02</td>
			<td>2013-04-04 16:07</td>
			<td>2013-04-12 14:18</td>
			<td>찰리</td>

			</tr>
			<?php $tooltip = 'blahblah';
			echo '<tr rel="tooltip" data-placement="right" data-original-title=' . $tooltip . ' data-container="body">';
		?>
			<td>G 13-0000041</td>
			<td>5</td>
			<td>1</td>
			<td>0</td>
			<td>14761861</td>
			<td>이이언</td>
			<td>F</td>
			<td>59</td>
			<td>1953-09-02</td>
			<td>2013-04-04 16:07</td>
			<td>2013-04-12 14:18</td>
			<td>찰리</td>

			</tr>
			<?php
			$tooltip = 'blahblah';
			echo '<tr rel="tooltip" data-placement="right" data-original-title=' . $tooltip . ' data-container="body">';
		?>
			<td>G 13-0000041</td>
			<td>5</td>
			<td>1</td>
			<td>0</td>
			<td>14761861</td>
			<td>이이언</td>
			<td>F</td>
			<td>59</td>
			<td>1953-09-02</td>
			<td>2013-04-04 16:07</td>
			<td>2013-04-12 14:18</td>
			<td>찰리</td>

			</tr>

		</table>
	</div>

