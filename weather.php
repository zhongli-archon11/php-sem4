<?php
	$url = "https://api.openweathermap.org/data/2.5/weather?q=dispur&appid=896a8cbed5c40502dcb134637c775148";
	$json = file_get_contents($url);
	$json_data = json_decode($json);

    echo "Date: " . date("d/m/Y") . "<br>";

    echo $json_data->weather->main;
    echo "Location(lon, lat)= (".$json_data->coord->lon.", ".$json_data->coord->lat.")";
    $cels=($json_data->main->temp- 32)*5/9;
    echo "<br>Temperature= ".$json_data->main->temp."&#8457;/".round($cels,2)."&#8451;<br>";
?>
