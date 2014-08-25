	<div class="col-md-5">
		<div class="panel panel-info">
			<div class="panel-heading">
				<div class="filter_title panel-title">
					Send
				</div>
			</div>
			<div class="panel-body">
				<!-- to modify this action path that you want  -->
				<form class="form-horizontal" role="form" action="http://192.168.0.20:8087/index.php/PB_proto_c/sampleD" method="POST" accept-charset="UTF-8">
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
							<input type="text" class="form-control input-sm" id="id" placeholder="ID">
							<!-- <input type="hidden" name="image" value="<? echo $fcode;?>"> -->
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
	
<!-- <div class="row">
	<div class="col-md-12">
		<div class="panel panel-info">
			<div class="panel-heading">
				<div class="filter_title panel-title">
					ETC
				</div>
			</div>
			<div class="panel-body">
				<div class="comment">
					<form action="http://192.168.0.20:8087/index.php/PB_proto_c/sreport_em" method="POST" accept-charset="UTF-8">
						<textarea rows="7" cols="100" align="right" name="comment"><?php
						echo $comment;
					?>
					</textarea>
						<br />
						<button type="submit" value="save"class="btn btn-primary btn-sm search">
							Save
						</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div> -->