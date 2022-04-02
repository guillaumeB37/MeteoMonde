<?php

$localite = 'https://www.prevision-meteo.ch/services/json/chinon'
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