<?php 

class Session
{
    
    private $session;

    function __construct()
    {
        $this->session = $_SESSION;
        if (!isset($this->session['config'])) 
        {
            $this->session['config'] = false;
        }
    }

    private function save()
    {
        $_SESSION = $this->session;
    }

    public function config()
    {
        return $this->session['config'];
    }

    public function add($index, $element)
    {
        $counter = 0;
        while (isset($this->session[$index])) 
        {
             $index = $index . $counter;
             $counter++;
        } 

        $this->session[$index] = $element;
        $this->save();
        
    }

    public function update($index, $element)
    {
        $this->session[$index] = $element;
        $this->save();
    }

    public function remove($index)
    {
        if (isset($this->session[$index])) 
        {
            unset($this->session[$index]);
        }  
    }

    public function reset()
    {
        session_destroy();
    }
}