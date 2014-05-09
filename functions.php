<?php
	function imageViewer($path){
	return ('
	<div class="picture-viewer" id="'.$path.'">
	<ul>
	<li img-id="1">Dry and Wet</li>
	<li img-id="2">Foundries</li>
	<li img-id="3">Wood Working </li>
	<li img-id="4">Paper Converting</li>
	<li>Paper Producing</li>
	<li>Grinding</li>
	<li>Welding </li>
	<li>Plasma and Laser Cutting</li>
	<li>Polishing and Finishing</li>
	<li>Recycling </li>
	<li>Stone Cutting</li>
	<li>Compressed Air Piping</li>
	<li>Explosion Venting</li>
	<li>Fire Suppression Systems</li>
	<li>Spark detection Systems</li>
	<li>Portable dust collection systems</li>
	</ul>
	<div class="img-container"></div>
	</div>');
	}
?>