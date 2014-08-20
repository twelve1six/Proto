<div class="col-md-3">

	<!-- pills version -->
	<ul class="nav nav-pills" id="myTab">
		<li class="active">
			<a href="#grossImage">Gross Images</a>
		</li>
		<li>
			<a href="#microImages">Micro Images</a>
		</li>
		<li>
			<a href="#slideScan">1:1 Slide Scan</a>
		</li>
		<li>
			<a href="#grossAnimation">Gross Animation</a>
		</li>
		<li>
			<a href="#mappingSheet">Mapping Sheet</a>
		</li>
	</ul>

	<div class="tab-content">
		<div class="tab-pane active" id="grossImage">
			<a href="#" class="thumbnail">
			<?php
			$b64image = base64_encode($fcode);
			$type = 'image/jpeg';

			echo '<img src="data:' . $type . ';base64,' . $b64image . '" alt = "125*125" />';
			?></a>
			
			<a href="#" class="thumbnail">
			<?php
			$b64image = base64_encode($fcode);
			$type = 'image/jpeg';

			echo '<img src="data:' . $type . ';base64,' . $b64image . '" alt = "125*125" />';
			?></a>
		</div>
		<div class="tab-pane" id="microImages">
			2
		</div>
		<div class="tab-pane" id="slideScan">
			3
		</div>
		<div class="tab-pane" id="grossAnimation">
			4
		</div>
		<div class="tab-pane" id="mappingSheet">
			5
		</div>
		
	</div>

	<!-- <div class="panel panel-info">
	<div class="panel-heading">
	<div class="pathology_result_title panel-title">
	Images</br>
	</div>
	</div>
	<div class="panel-body">
	</div>
	</div>

	<!--accordian version  -->
	<!-- <div class="panel-group" id="accordion">
	<div class="panel panel-info">
	<div class="panel-heading">
	<h4 class="panel-title">
	<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
	Gross Images
	</a>
	</h4>
	</div>
	<div id="collapseOne" class="panel-collapse collapse in">
	<div class="panel-body">
	Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
	</div>
	</div>
	</div>
	<div class="panel panel-info">
	<div class="panel-heading">
	<h4 class="panel-title">
	<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
	Micro Images
	</a>
	</h4>
	</div>
	<div id="collapseTwo" class="panel-collapse collapse">
	<div class="panel-body">
	Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
	</div>
	</div>
	</div>
	<div class="panel panel-info">
	<div class="panel-heading">
	<h4 class="panel-title">
	<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
	1:1 Slide Scan
	</a>
	</h4>
	</div>
	<div id="collapseThree" class="panel-collapse collapse">
	<div class="panel-body">
	Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
	</div>
	</div>
	</div>
	<div class="panel panel-info">
	<div class="panel-heading">
	<h4 class="panel-title">
	<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
	Gross Animation
	</a>
	</h4>
	</div>
	<div id="collapseThree" class="panel-collapse collapse">
	<div class="panel-body">
	Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
	</div>
	</div>
	</div>
	<div class="panel panel-info">
	<div class="panel-heading">
	<h4 class="panel-title">
	<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
	Mapping Sheet
	</a>
	</h4>
	</div>
	<div id="collapseThree" class="panel-collapse collapse">
	<div class="panel-body">
	Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
	</div>
	</div>
	</div>
	</div> -->

</div>

