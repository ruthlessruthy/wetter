<?php
$wetter = file_get_contents("https://www.metaweather.com/api/location/638242/");
$wetter = json_decode($wetter, true);
$wettericon = $wetter["consolidated_weather"][0]["weather_state_abbr"];
$wetterstatus = $wetter["consolidated_weather"][0]["weather_state_name"];
//Variable für mindestemperatur gerundet
$mintemp = round($wetter["consolidated_weather"][0]["min_temp"]);
$maxtemp = round($wetter["consolidated_weather"][0]["max_temp"]);

 ?>

<img src="img/<?php echo $wettericon;?>.svg" alt="" width="100">
<p><?php echo $wetterstatus;?></p>
<p><?php echo $mintemp;?></p>
<p><?php echo $maxtemp;?></p>

<pre>
<?php
print_r($wetter)
//echo $wetter["sun_rise"];
//print_r($wetter["consolidated_weather"][0]);

 ?>
</pre>
