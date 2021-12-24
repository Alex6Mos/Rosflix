<?php

function nasa(){ //retourne img
    $url = "https://api.nasa.gov/planetary/apod?api_key=imX0STjbjG1lcMVS3ToBBsgbSx7PAveuoVHMdQfS&date=".date('Y-m-d');
    $json = file_get_contents($url);
    $obj = json_decode($json);
    return $obj->{'url'};
}

?>