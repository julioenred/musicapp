<?php 

class ViewSongsView extends View
{
    protected function render()
    {
        // Helpers::show($this->data);
        $allList = $this->data->getList('all');
        $songs = $this->html->getElementById('songs');
        foreach ($allList->songs() as $key => $song) 
        {
            $link = $this->html->createElement('a');
            $br = $this->html->createElement('br');
            $link->setAttribute('src', URL_BASE . 'index.php/viewsong/' . $key);
            $link->nodeValue = $song->title();
            $songs->appendChild($link);
            $songs->appendChild($br);
        }
    }
}