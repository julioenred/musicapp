<?php 

abstract class View
{
    protected $html;

    function __construct($file)
    {
        $this->html = new DOMDocument();
        $this->html->loadHtmlFile($file);
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