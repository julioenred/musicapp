<?php 

class Helpers
{
    public static function show($variable) 
    {
        echo '<pre>';
        var_dump($variable);
        echo '</pre>';
        exit;
    }
}