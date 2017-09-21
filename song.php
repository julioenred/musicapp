<?php 

class Song
{
    private $id;
    private $title;
    private $artist;
    private $urlYoutube;

    function __construct($song)
    {
        $this->id = $song['id'];
        $this->title = $song['title'];
        $this->artist = $song['artist'];
        $this->urlYoutube = $song['youtube'];
    }

    public function play()
    {
        $view = new View('playsong.html');
    }
}