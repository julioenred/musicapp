<?php 

include 'request.php';
include 'musicapp.php';
include './views/view.php';
include './views/getsongview.php';

$musicapp = new MusicApp(new Request($_SERVER['REQUEST_URI']));
$musicapp->run();
