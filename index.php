<?php 

include 'request.php';
include 'musicapp.php';
include 'view.php';
include 'getsongview.php';

$musicapp = new MusicApp(new Request($_SERVER['REQUEST_URI']));
$musicapp->run();
