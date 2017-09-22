<?php 

class Session
{
    
    private $session;

    function __construct()
    {
        $this->session = $_SESSION;
    }

    private function save()
    {
        $_SESSION = $this->session;
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

    public function remove($index)
    {
        if (isset($this->session[$index])) 
        {
            unset($this->session[$index]);
        }  
    }

    public function destroy()
    {
        session_destroy();
    }
}