<?php

class Song {

    public $songId;
    public $title;

}

$octopusSong = new Song();
$octopusSong->songId = 1;
$octopusSong->title = "This is my Song";

var_dump($octopusSong);