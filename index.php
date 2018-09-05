<?php

$address = 'avenida+gustavo+paiva,maceio,alagoas,brasil';

    $geocode = file_get_contents('http://maps.google.com/maps/api/geocode/json?address='.$address.'&sensor=false');

    $output= json_decode($geocode);

    $lat = $output->results[0]->geometry->location->lat;
    $long = $output->results[0]->geometry->location->lng;

    echo "Latitud :: {$lat} <br>";
    echo "Longitud :: {$long}<br>";

    echo "User Agent :: {$_SERVER['HTTP_USER_AGENT']}";

?>