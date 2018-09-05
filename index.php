<?php

$address = 'avenida+gustavo+paiva,maceio,alagoas,brasil';

    $geocode = file_get_contents('http://maps.google.com/maps/api/geocode/json?address='.$address.'&sensor=false');

    $output= json_decode($geocode);

    $lat = $output->results[0]->geometry->location->lat;
    $long = $output->results[0]->geometry->location->lng;

    echo "Latitud :: {$lat} <br>";
    echo "Longitud :: {$long}<br>";

    echo "User Agent :: {$_SERVER['HTTP_USER_AGENT']}";

    $new_arr[]= unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip='.$_SERVER['REMOTE_ADDR']));
    echo "Latitude:".$new_arr[0]['geoplugin_latitude']." and Longitude:".$new_arr[0]['geoplugin_longitude'];



?>