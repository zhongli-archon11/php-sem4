<?php
	$json=file_get_contents('weather.json');
	$json_data= json_decode($json);
	
	//echo "<pre>";
	//print_r($json_data);
	//echo "</pre>";

    echo $json_data->weather->main;
    echo "Location(lon, lat)= (".$json_data->coord->lon.", ".$json_data->coord->lat.")";
    $cels=($json_data->main->temp- 32)*5/9;
    echo "<br>Temperature= ".$json_data->main->temp."&#8457;/".round($cels,2)."&#8451;<br>";
    echo "Sky: ".$json_data->weather->sky;
?>
