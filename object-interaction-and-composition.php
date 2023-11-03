<?php

// Making a Song and adding the song into playlist:

class Song {
    public $songId;
    public $title;

}

$octopusGarden = new Song();
$octopusGarden->songId = "123";
$octopusGarden->title = "Octopus Garden";

$redYellowSong = new Song();
$redYellowSong->songId = "1234";
$redYellowSong->title =  "Red Yellow Song";

print_r($octopusGarden);


class Playlist {
    public $name;
    public $songs = [];

    public function addSong($song) {
        $this->songs[] = $song;
        
        
    }
}

$playlist = new PlayList();
$playlist->name = 'Rock 40';
$playlist->addsong($octopusGarden);
$playlist->addsong($redYellowSong);


print_r($playlist);