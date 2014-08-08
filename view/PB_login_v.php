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
			<!-- <ul class="dropdown-menu" role="menu">
			<li><a href="#">Action</a></li>
			<li><a href="#">Another action</a></li>
			<li><a href="#">Something else here</a></li>
			<li class="divider"></li>
			<li><a href="#">Separated link</a></li>
			</ul> -->
			<p class="navbar-brand">
				iPIMS
			</p>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav">
				<li class="active">
					<a href="/index.php/PB_proto_c/login">Log In</a>
				</li>
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
				<li>
					<a href="/index.php/PB_proto_c/sreport">Send Report</a>
				</li>
			</ul>
		</div><!-- /.navbar-collapse -->
	</div>
	<div class="container-fluid container-fluid-banner">
		<div class="banner">
			Log In
		</div>
	</div>
<div class="row">&nbsp;</div>
<div class="row">&nbsp;</div>
<div class="row">&nbsp;</div>
<div class="row">&nbsp;</div>
<div class="row">&nbsp;</div>
<div class="row">&nbsp;</div>
<div class="row">&nbsp;</div>
<div class="row">&nbsp;</div>

	<form class="form-horizontal" role="form" action="/index.php/PB_proto_c/authentication" method="post">
		<!-- check validation_error -->
		<?php echo validation_errors(); ?>
  <div class="form-group">
    <label for="inputID3" class="col-sm-5 control-label">ID</label>
    <div class="col-sm-2">
      <input type="id" class="form-control" id="inputID" placeholder="ID" name="userid">
    </div>
  </div>  
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-5 control-label">Password</label>
    <div class="col-sm-2">
      <input type="password" class="form-control" id="inputPW" placeholder="Password" name="userpw">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-5 col-sm-6">
      <div class="checkbox">
        <label>
          <input type="checkbox"> Remember me |
          <a href="/index.php/PB_proto_c/rsearch">  Find ID </a>  | 
          <a href="/index.php/PB_proto_c/rsearch"> Find PW </a> |
        </label>
      </div>
    </div>
  </div>
  </br>
  <div class="form-group">
    <div class="col-sm-offset-5 col-sm-6">     
    	&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
      <button type="submit" class="btn btn-primary btn-lg">Log In</button>
    </div>
  </div>
</form>
</nav>