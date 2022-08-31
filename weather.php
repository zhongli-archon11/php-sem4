<?php
	$url = "https://api.openweathermap.org/data/2.5/weather?lat=26.1425&lon=91.7889}&appid=0d64329ca82e10dd83024812dc1c9d8e";
	$json = file_get_contents($url);
	$json_data = json_decode($json);
	
	echo "<pre>";
	print_r($json_data);
	echo "</pre>";

	#echo $json_data->weather->main;
?>
