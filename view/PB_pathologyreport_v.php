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
			<ul class="nav navbar-nav navbar-right">
					<li>
						<a href="/index.php/PB_proto_c/signup">Sign Up</a>
					</li>
				</ul>
		</div><!-- /.navbar-collapse -->
	</div>
	<div class="container-fluid container-fluid-banner">
		<div class="banner">
			Pathologic Report
		</div>
	</div>
	<div class="row">
		&nbsp;
	</div>
	<div class="row">
		&nbsp;
	</div>

	<div class="col-md-4">
		<div class="panel panel-info">
			<div class="panel-heading">
				<div class="filter_title panel-title">
					Pathologic Identification
				</div>
			</div>
			<div class="panel-body">
				<div class="col-md-5">
					<form class="form-horizontal" role="form">
						<div class="input-group">
							<input type="text" class="form-control input-sm" id="pathologyNum" placeholder="Pathology Num">
							<span class="input-group-btn">
								<button type="submit" class="btn btn-primary btn-sm">
									&nbsp;EMR&nbsp;
								</button> </span>
						</div>
						</br>
						<div class="input-group">
							<input type="text" class="form-control input-sm" id="receptionNum" placeholder="Reception Num">

							<span class="input-group-btn">
								<button type="submit" class="btn btn-primary btn-sm">
									PACS
								</button> </span>
						</div>
				</div>
				<div class="col-md-7">
					<div class="table-responsive">
						<table class="table table-bordered table-hover table-condensed">
							<tr>
								<th>&nbsp;Name&nbsp;</th>
								<th>Age</th>
								<th>Gender</th>
								<th>Department</th>
							</tr>
							<tr>
								<?php $name = '권봉귀';
								$age = 43;
								$gender = 'M';
								$department = 'ORC';

								echo '<td>' . $name . '</td>';
								echo '<td>' . $age . '</td>';
								echo '<td>' . $gender . '</td>';
								echo '<td>' . $department . '</td>';
								?>
							</tr>
						</table>
					</div>
				</div>
			</div>
		</div>
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
								<th>Select</th>
								<th>Pathology&nbsp;Number</th>
								<th>Reception&nbsp;Date</th>
								<th>Diagnosis</th>
								<th>Data</th>
							</tr>
							<tr>
								<td>
								<input type="checkbox">
								</td>
								<?php $Pnum = 'F 13-0000041';
									$Rdate = '2013-04-04';
									$Diagnosis = 'M54.21 ';
									$Data = 3;

									echo '<td>' . $Pnum . '</td>';
									echo '<td>' . $Rdate . '</td>';
									echo '<td>' . $Diagnosis . '</td>';
									echo '<td>' . $Data . '</td>';
								?>
							</tr>
							<tr>
								<td>
								<input type="checkbox">
								</td>
								<?php $Pnum = 'F 13-0000041';
									$Rdate = '2013-04-04';
									$Diagnosis = 'M54.21 ';
									$Data = 3;

									echo '<td>' . $Pnum . '</td>';
									echo '<td>' . $Rdate . '</td>';
									echo '<td>' . $Diagnosis . '</td>';
									echo '<td>' . $Data . '</td>';
								?>
							</tr>
							<tr>
								<td>
								<input type="checkbox">
								</td>
								<?php $Pnum = 'F 13-0000041';
									$Rdate = '2013-04-04';
									$Diagnosis = 'M54.21 ';
									$Data = 3;

									echo '<td>' . $Pnum . '</td>';
									echo '<td>' . $Rdate . '</td>';
									echo '<td>' . $Diagnosis . '</td>';
									echo '<td>' . $Data . '</td>';
								?>
							</tr>
							<tr>
								<td>
								<input type="checkbox">
								</td>
								<?php $Pnum = 'F 13-0000041';
									$Rdate = '2013-04-04';
									$Diagnosis = 'M54.21 ';
									$Data = 3;

									echo '<td>' . $Pnum . '</td>';
									echo '<td>' . $Rdate . '</td>';
									echo '<td>' . $Diagnosis . '</td>';
									echo '<td>' . $Data . '</td>';
								?>
							</tr>

							<tr>
								<td>
								<input type="checkbox">
								</td>
								<?php $Pnum = 'F 13-0000041';
									$Rdate = '2013-04-04';
									$Diagnosis = 'M54.21 ';
									$Data = 3;

									echo '<td>' . $Pnum . '</td>';
									echo '<td>' . $Rdate . '</td>';
									echo '<td>' . $Diagnosis . '</td>';
									echo '<td>' . $Data . '</td>';
								?>
							</tr>
							<tr>
								<td>
								<input type="checkbox">
								</td>
								<?php $Pnum = 'F 13-0000041';
									$Rdate = '2013-04-04';
									$Diagnosis = 'M54.21 ';
									$Data = 3;

									echo '<td>' . $Pnum . '</td>';
									echo '<td>' . $Rdate . '</td>';
									echo '<td>' . $Diagnosis . '</td>';
									echo '<td>' . $Data . '</td>';
								?>
							</tr>
						</table>
					</div>
					</form>
				</div>
				<div class="btn-group">
					<button type="button" class="btn btn-primary">
						+ Public Library
					</button>
					<button type="button" class="btn btn-primary">
						+ Private Library
					</button>
				</div>
			</div>

		</div>
	</div>
	<div class="col-md-5">
		<div class="panel panel-info">
			<div class="panel-heading">
				<div class="pathology_result_title panel-title">
					Pathologic Result</br>
				</div>
			</div>
			<div class="panel-body">
				<p class="text-left">
					<?php
					$report = '<병리검사 의뢰서 입력내용>
1. 채취부위:
2. 수술명:
3. 임상진단:

<동결절편 진단>

#1. 동결절편 조직은 6.0 * 1.0 * 0.5cm크기의 조직임.
동결절편 진단 (#1) : Proximal margin : Presence of carcinoma /HJP/
#2. 동결절편 조직은 1.2 * 1.0 * 0.5cm 크기의 조직임.
동결절편 진단 (#2) : Proximal margin : Free of carcinoma /HJP/

<육안소견>
받은 조직은 모두 3부분임.
#1. 신성 상태의 전 절제된 위장으로 구성된 위전 절제술 검체임. 검체는 두부분으로 나뉘어져 suture 되어 연결되어 왔음. 대만곡을 따라 열려져 왔으며 위장의 크기는 대만곡을 따라 22.0cm, 소만곡을 따라 14.0cm임. 연결된 십이지장의 길이는 1.5cm, 평균 내경 5.0cm임. 점막면에 전정부, 대만곡을 중심으로 궤양 침은형의 종	괴가 관찰됨. 종괴의 크기는 8.0cm * 8.0cm 이며 원위 절면으로부터 2.5cm, 근위 절면으로부터 6.0cm 떨어져 있음. 그 외 주변 점막에 궤양, 용종, 종괴 등의 다른 특이소견 관찰되지 않음. 연속 절개햐여 대표적 절편을 포매함.';

					//line feed
					$report = nl2br($report);
					//change 'tap' to 'space'
					//$report = str_replace("	", "&nbsp; &nbsp; &nbsp; &nbsp; ", $report);
					echo $report;
					?>
				</p>
			</div>
		</div>
	</div>
	