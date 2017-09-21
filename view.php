<?php 

class View
{
    private $file;

    function __construct($file)
    {
        $this->file = $file;
    }

    public function show()
    {
        $html = new DOMDocument();
        $html->loadHtmlFile($this->file);

        // $etiqueta = $html->getElementById('title');
        // $etiqueta->nodeValue = $elemento['texto'];
        // foreach ($datos as $key => $elemento) 
        // {
        //     $etiqueta = $html->getElementById($elemento['id']);
        //     $etiqueta->nodeValue = $elemento['texto'];
        // }
        echo $html->saveHtml();
    }

    public function render()
    {
        
    }
}