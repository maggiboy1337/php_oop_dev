<?php

class Song {

    public $songId;
    public $title;

}

class Playlist {

    public $name;
    public $songs = [];

    public function addSong($song){

        $this->songs[] = $song;

    }

    public function removeSong($song){

        //Remove song from playlist

    }
    
}