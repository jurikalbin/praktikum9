<?php 
require_once('head.html'); 
	$gallery=array(
		array("pic"=>"pildid/nameless1.jpg","alt"=>"nimetu 1"),
		array("pic"=>"pildid/nameless2.jpg","alt"=>"nimetu 2"),
		array("pic"=>"pildid/nameless3.jpg","alt"=>"nimetu 3"),
		array("pic"=>"pildid/nameless4.jpg","alt"=>"nimetu 4"),
		array("pic"=>"pildid/nameless5.jpg","alt"=>"nimetu 5"),
		array("pic"=>"pildid/nameless6.jpg","alt"=>"nimetu 6"),
	);
	
	if (isset($_GET['page']) && $_GET['page']!="" ) {
			$param=$_GET['page'];
	} else {
		$param="pealeht.html";
	}
	switch($param){
		case "pealeht":
			include('pealeht.html');
		break;
		case "galerii":
			include('galerii.html');
		break;
		case "vote":
			include('vote.html');
		break;
		case "tulemus":
			include('tulemus.html');
		break;
	}	
require_once('foot.html'); ?>