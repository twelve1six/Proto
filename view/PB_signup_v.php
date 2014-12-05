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
						<li>
							<a href="/index.php/PB_proto_c/sreport_mlclr">Molecular</a>
						</li>
						<li class="divider"></li>
						<li>
							<a href="/index.php/PB_proto_c/sreport_if">IF</a>
						</li>
						<li class="divider"></li>
						<li>
							<a href="/index.php/PB_proto_c/sreport_em">EM</a>
						</li>
					</ul>
				</li>
			</ul>
				<ul class="nav navbar-nav navbar-right">
					<li class="active">
						<a href="/index.php/PB_proto_c/signup">Sign Up</a>
					</li>
				</ul>
		</div><!-- /.navbar-collapse -->
	</div>
	<div class="container-fluid container-fluid-banner">
		<div class="banner">
			Sign Up
		</div>
	</div>
	<div class="row">
		&nbsp;
	</div>
	<div class="row">
		&nbsp;
	</div>
	<div class="row">
		&nbsp;
	</div>
	<div class="row">
		&nbsp;
	</div>
	<div class="row">
		&nbsp;
	</div>
	<div class="row">
		&nbsp;
	</div>
	<div class="row">
		&nbsp;
	</div>
	<div class="row">
		&nbsp;
	</div>

	<form class="form-horizontal" role="form" action="/index.php/PB_proto_c/signup" method="post">
		<!-- check validation_error -->
		<?php echo validation_errors(); ?>
		<div class="form-group">
			<label for="id" class="col-sm-5 control-label">ID</label>
			<div class="col-sm-2">
				<!-- set value for submitted data(id) -->
				<input type="id" class="form-control" id="id" placeholder="ID" name="id" value="<?php echo set_value('id'); ?>">
			</div>
		</div>
		<div class="form-group">
			<label for="pw" class="col-sm-5 control-label">Password</label>
			<div class="col-sm-2">
				<!-- set value for submitted data(pw) -->
				<input type="password" class="form-control" id="pw" placeholder="Password" name="pw" value="<?php echo set_value('pw'); ?>">
			</div>
		</div>
		<div class="form-group">
			<label for="re_password" class="col-sm-5 control-label">Password Check</label>
			<div class="col-sm-2">
				<!-- set value for submitted data(re_pw) -->
				<input type="password" class="form-control" id="re_password" placeholder="Password Check" name="re_password" value="<?php echo set_value('re_password'); ?>">
			</div>
		</div>
		<div class="form-group">
			<label for="email" class="col-sm-5 control-label">E-mail</label>
			<div class="col-sm-2">
				<!-- set value for submitted data(email) -->
				<input type="email" class="form-control" id="email" placeholder="E-mail" name="email" value="<?php echo set_value('email'); ?>">
			</div>
		</div>
		</br>
		<div class="form-group">
			<div class="col-sm-offset-5 col-sm-6">
				&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
				<button type="submit" class="btn btn-primary btn-lg">
					Sign Up
				</button>
			</div>
		</div>
	</form>
</nav>