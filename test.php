<?php


//*$woeid = 638242
$weather  = file_get_contents('https://www.metaweather.com/api/location/638242/');
$weather = json_decode($weather, true);

?>


  <?php
  //*in den eckigen klammern werden werte aus den asso arrays angesprochen
  $weather = $weather["consolidated_weather"][0];
  //*die variable wetter wird zur variable mindest temp. wenn im arry der wert min-temp ist
  $min_temp = $weather["min_temp"];
  //* die variable kriegt eine funktion: die zahl soll gerundet werden, was gerundet werden soll steht in runden klammern hinter der funktion
  $min_temp= round ($min_temp);
  //*wenn ich eine variable ausgeben will, brauche ich keine klammern oder anführungszeichen


  $max_temp = $weather["max_temp"];

  $max_temp= round($max_temp);
//*wenn ich im string den datei-typ mit konkatinator verbinde, habe ich aus dem namen der variablen die entsprechende datei hergestellt
  $today_state = $weather["weather_state_abbr"] . ".svg";

  $abbr=$weather["weather_state_abbr"];

  function tagline($abbr){
    if ($abbr == "c"){
    echo "niiice";
  }
  elseif($abbr == "lc"){
    echo "ganz ok";
  }
  else {
    echo "mieser piesel";
  }
}






   ?>
