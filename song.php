<?php 

class Song
{
    private $title;
    private $artist;
    private $urlYoutube;

    function __construct($song)
    {
        $this->title = $song['title'];
        $this->artist = $song['artist'];
        $this->urlYoutube = $song['youtube'];
    }

    public function update()
    {
        
    }

    public function play()
    {
        $view = new View('playsong.html');
    }
}