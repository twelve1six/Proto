<div class="col-md-5">
	<div class="panel panel-info">
		<div class="panel-heading">
			<div class="filter_title panel-title">
				Send
			</div>
		</div>
		<div class="panel-body">
			<!-- to modify this action path that you want  -->
			<!-- actually, form action and others defined by javascript 'frm' check the PB_footer_v-->
			<form class="form-horizontal" role="form" action="http://192.168.0.20:8085/Ben_test/sample.php" method="POST" accept-charset="UTF-8" name="frm">
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
				<span class="label label-primary">ID</span>
				<div class="form-group">
					<div class="col-md-11">
						<input type="text" class="form-control input-sm" name="id" placeholder="ID">
						<!-- short data sending by hidden type. But image blob, I couldn't find the way to send -->
						<?php
						$b64fcode = base64_encode($fcode);
						echo "<input type='hidden' name='image' value=" . $b64fcode . ">";
						?>
					</div>
				</div>
				<div class="input-group">
					<button type="submit" class="btn btn-primary btn-sm search" onclick="fn_open();">
						Send
					</button>
				</div>
			</form>
		</div>
	</div>
</div>
