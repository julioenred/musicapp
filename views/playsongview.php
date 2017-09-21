<?php 

abstract class PlaySongView extends View
{
    abstract private function render()
    {
        $etiqueta = $this->html->getElementById('title');
        $etiqueta->setAttribute('class', 'none');
    }
}