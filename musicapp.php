<?php 

class MusicApp 
{
    private $session;
    private $request;

    function __construct($request, $session)
    {
        $this->request = $request;
        $this->session = $session;
    }

    public function run()
    {
        $action = $this->request->getAction();

        switch ($action) 
        {
            case 'getsong':
                $getSongView = new GetSongView('./views/getsong.html');
                $getSongView->show();
                break;
            case 'addsong':
                $input = $_POST;
                var_dump($input);
                exit;
                
                $view = new View('./views/getsong.html');
                $view->show();
                break;
            case 'prueba':
                $this->session->add('prueba', 'prueba');
                var_dump($this->session);
                break;
            case 'trace':
                $this->session->add('trace', 'trace');
                var_dump($this->session);
                break;
            case 'session':
                var_dump($this->session);
                break;
            case 'destroy':
                $this->session->destroy();
                break;
            default:
                echo 'página no encontrada';
                break;
        }
    }
}