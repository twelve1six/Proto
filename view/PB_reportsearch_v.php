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