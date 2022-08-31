<?php

$url = "https://api.openweathermap.org/data/2.5/weather?q=dispur&appid=896a8cbed5c40502dcb134637c775148";
	$json = file_get_contents($url);
	$json_data = json_decode($json);
    echo "<pre>";
	print_r($json_data);
	echo "</pre>";
?>