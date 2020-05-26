<?php
$localite = 'https://www.prevision-meteo.ch/services/json/bruxelles-1';

$json = file_get_contents($localite);
$json = json_decode($json);

$nom =  $json->city_info->name;

$temperature =  $json->current_condition->tmp;

$lsolei = $json->city_info->sunrise;

$csoleil = $json->city_info->sunset;

$vent = $json->current_condition->wnd_spd;

$heure = $json->current_condition->hour;

$date = $json->current_condition->date;

$pression = $json->current_condition->pressure;

$humidite = $json->current_condition->humidity;

$condition = $json->current_condition->condition;


?>
<!DOCTYPE html>
<html>
<head>
	<title>TUTO API METEO</title>
	<meta charset="utf-8">
</head>
<body>
Nom de la ville : <?php echo $nom; ?> <br />

Température : <?php echo $temperature; ?> <br />

Lever du soleil : <?php echo $lsolei; ?> <br />

Coucher du soleil : <?php echo $csoleil; ?> <br />

Vitesse du vent : <?php echo $vent; ?> <br />

Date actuelle : <?php echo $date; ?> <br />

Heure actuelle : <?php echo $heure; ?> <br />

Pression : <?php echo $pression; ?> <br />

Humitité : <?php echo $humidite; ?> <br />

Condition : <?php echo $condition; ?> <br />


</body>
</html>
