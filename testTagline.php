<?php


//*$woeid = 638242
$weather  = file_get_contents('https://www.metaweather.com/api/location/638242/');
$weather = json_decode($weather, true);

?>

<?php

$abbr=$weather["weather_state_abbr"];

function ($abbr){
  if ($abbr == "c"){
  echo "niiice";
}
elseif($abbr == "lc"){
  echo "ganz ok";
}
else {
  echo "mieser piesel";
}



?>
