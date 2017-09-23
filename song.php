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

    public function add($session)
    {
        $session->add()
    }

    public function play()
    {
        $view = new View('playsong.html');
    }
}