<?php 

class Lista 
{
    private $songs;
    private $title;

    function __construct($title)
    {
        $this->title = $title;
        $this->songs = [];
    }

    public function title()
    {
        return $this->title;
    }

    public function add($song)
    {
        $this->songs[] = $song;
    }

    public function remove($song)
    {

    }

    public function play()
    {

    }
}