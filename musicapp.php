<?php 

class MusicApp 
{
    private $session;
    private $request;

    function __construct($request, $session)
    {
        $this->request = $request;
        $this->session = $session;
        if (!$this->session->config()) 
        {
            $this->config(new Lista('all'));
        }
    }

    private function config($list)
    {
        if (!$this->session->config()) 
        {
            $this->session->add(LISTS, $list);
            $this->session->update('config', true);
        }
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
            case 'session':
                Helpers::show($this->session);
                break;
            case 'reset':
                $this->session->reset();
                break;
            default:
                echo 'página no encontrada';
                break;
        }
    }
}