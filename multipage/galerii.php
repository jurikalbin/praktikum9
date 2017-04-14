<?php require_once('head.html'); ?>
<h3>Fotod</h3>
<div id="gallery">
	<?php
		$gallery=array(
			array("pic"=>"pildid/nameless1.jpg","alt"=>"nimetu 1"),
			array("pic"=>"pildid/nameless2.jpg","alt"=>"nimetu 2"),
			array("pic"=>"pildid/nameless3.jpg","alt"=>"nimetu 3"),
			array("pic"=>"pildid/nameless4.jpg","alt"=>"nimetu 4"),
			array("pic"=>"pildid/nameless5.jpg","alt"=>"nimetu 5"),
			array("pic"=>"pildid/nameless6.jpg","alt"=>"nimetu 6"),
		);
		foreach($gallery as $picture){
	?>
			<img src="<?php echo $picture['pic'];?>" alt="<?php echo $picture['alt'];?>" /> 	
	<?php	
		}
	?>
<!--
	<img src="pildid/nameless1.jpg" alt="nimetu 1" />
	<img src="pildid/nameless2.jpg" alt="nimetu 2" />
	<img src="pildid/nameless3.jpg" alt="nimetu 3" />
	<img src="pildid/nameless4.jpg" alt="nimetu 4" />
	<img src="pildid/nameless5.jpg" alt="nimetu 5" />
	<img src="pildid/nameless6.jpg" alt="nimetu 6" />
-->
	</div>
<?php require_once('foot.html'); ?>