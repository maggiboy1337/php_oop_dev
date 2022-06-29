<?php

include_once "./classes/class_playlist.php";


$octopusSong = new Song();
$octopusSong->songId = 1;
$octopusSong->title = "This is my Song";


$playlist = new Playlist();
$playlist->name = "Rock";
$playlist->addSong($octopusSong->title);


var_dump($playlist->songs); 