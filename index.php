<?php
$wetter = file_get_contents("https://www.metaweather.com/api/location/638242/");
$wetter = json_decode($wetter, true);
$wettericon = $wetter["consolidated_weather"][0]["weather_state_abbr"];
$wetterstatus = $wetter["consolidated_weather"][0]["weather_state_name"];
//Variable für mindestemperatur gerundet
$mintemp = round($wetter["consolidated_weather"][0]["min_temp"]);
$maxtemp = round($wetter["consolidated_weather"][0]["max_temp"]);
$datum = date("d.m.Y");

function tagline($wettericon){
if ($wettericon == "c") {
  echo "Hello Sunshine";
}

elseif ($wettericon == "sn") {
  echo "Ice Ice Baby";
}

elseif ($wettericon == "t") {
  echo "Thunder Thunder Thunder";

}

elseif ($wettericon == "sl") {
  echo "Baby, don´t hurt me";
}

elseif ($wettericon == "hc" || $wettericon =="lc") {
  echo "Clouds above the moon";}

  else {
  echo "Why does ist always rain on me";
  }

}
 ?>

<!DOCTYPE html>
<html lang="de" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supi Wetter App</title>

    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <div class="hero is-fullheight is-dark is-bold">
      <div class="container has-text-centered">
        <div class="content is-small">
          Berlin ...
          <?php echo $datum ?>
        </div>

      <div class="rel state">
        <img src="img/<?php echo $wettericon;?>.svg" alt="Wetter Icon" width="200" height="200">
        <p>
          <span class="min-temp">
            <?php echo $mintemp ?>
          </span>

          <span class="max-temp">
            <?php echo $maxtemp ?>
          </span>
        </p>
        </div>

        <div class="content is-large state">
          <p class="is-size-1 is-uppercase has-text-weight-bold">
  <?php tagline($wettericon); ?>
</p>
          <div class="">
<br><iframe width="560" height="315" src="https://www.youtube.com/embed/PXatLOWjr-k" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
        </div>
      </div>
      </div>
    </div>
  </body>
</html>
