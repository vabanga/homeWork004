<?php

$pogoda = "http://samples.openweathermap.org/data/2.5/weather?q=Khabarovsk,ru&appid=6b7c151fcd9ea5d60237fef747ad775c";
$string = file_get_contents($pogoda);

$results = json_decode($string, $assoc = true, $depth = 10000);


var_dump($results["weather"][0]["main"]);
echo "<br>";
echo "<br>";
var_dump($results["main"]["temp"]);


?>

