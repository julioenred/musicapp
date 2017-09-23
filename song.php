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

    public function title()
    {
        return $this->title;
    }

    public function artist()
    {
        return $this->artist;
    }

    public function youtube()
    {
        return $this->urlYoutube;
    }

    public function update()
    {
        
    }

    public function play()
    {
        $view = new View('playsong.html');
    }
}