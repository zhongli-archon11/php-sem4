<?php
	$json=file_get_contents('weather.json');
	$json_data= json_decode($json);
	
	echo "<pre>";
	print_r($json_data);
	echo "</pre>";
?>
