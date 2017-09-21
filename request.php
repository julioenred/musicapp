<?php 

include 'config.php';

class Request
{
    private $uri;

    function __construct($uri)
    {
        $this->uri = $uri;
    }

    public function getAction()
    {
        $uriArray = explode('/', $this->uri);
        return $uriArray[ACTION];
    }
}