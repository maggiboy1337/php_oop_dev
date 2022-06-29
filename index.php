<?php

include_once "./classes/class_playlist.php";


$octopusSong = new Song();
$octopusSong->songId = 1;
$octopusSong->title = "This is my Song";

var_dump($octopusSong);