<?php 

class MusicApp 
{
    private $lists;
    private $request;

    function __construct($request)
    {
        $this->request = $request;
    }

    public function run()
    {
        $action = $this->request->getAction();

        switch ($action) 
        {
            case 'getsong':
                $view = new View('getsong.html');
                $view->show();
                break;
            case 'addsong':
                $input = $_POST;
                
                $view = new View('getsong.html');
                $view->show();
                break;
            default:
                echo 'página no encontrada';
                break;
        }
    }
}