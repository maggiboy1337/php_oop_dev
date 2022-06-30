<?php

include_once "./classes/class_playlist.php";

$playlist = new Playlist();
$playlist->name = "Rock";


$octopusSong = new Song();
$octopusSong->songId = 1;
$octopusSong->title = "This is my Song";
$playlist->addSong($octopusSong);

$new_song = new Song();
$new_song->songId = 2;
$new_song->title = "Another Song";
$playlist->addSong($new_song);

var_dump($playlist->songs); 