<?php
$PATH=$_REQUEST['ruta'];
	$myfile = fopen($PATH, "r") or die("Unable to open file!");
		echo fread($myfile,filesize($PATH));
		fclose($myfile);
?>