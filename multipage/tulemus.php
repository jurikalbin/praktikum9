<?php require_once('head.html'); ?>
	<h3>Valiku tulemus</h3>
	<?php
		$gallery=array(
			array("pic"=>"pildid/nameless1.jpg","alt"=>"nimetu 1"),
			array("pic"=>"pildid/nameless2.jpg","alt"=>"nimetu 2"),
			array("pic"=>"pildid/nameless3.jpg","alt"=>"nimetu 3"),
			array("pic"=>"pildid/nameless4.jpg","alt"=>"nimetu 4"),
			array("pic"=>"pildid/nameless5.jpg","alt"=>"nimetu 5"),
			array("pic"=>"pildid/nameless6.jpg","alt"=>"nimetu 6"),
		);
		
		$count = count($gallery);
		if (isset($_GET['pilt']) && $_GET['pilt']!="" && $_GET['pilt']<=$count && $_GET['pilt']> 0 ) {
			$answ=$_GET['pilt'];
	?>
	<p>Valisid pildi number: <b><?php echo $answ ?></b> kõikide piltide arv on <?php echo $count ?>
		
	</p>
		<?php 
	} else {
			echo "Pilti ei valitud või valiti vale pilt !!!";
	}
	?>
<?php require_once('foot.html'); ?>
