<?php 

abstract class View
{
    protected $html;
    protected $data;

    function __construct($file, $data = [])
    {
        $this->html = new DOMDocument();
        $this->html->loadHtmlFile($file);
        $this->data = $data;
    }

    public function show()
    {
        $this->render();
        echo $this->html->saveHtml();
    }

    abstract protected function render();

    // abstract private function render()
    // {
    //     $etiqueta = $this->html->getElementById('title');
    //     $etiqueta->setAttribute('class', 'none');
    // }
}