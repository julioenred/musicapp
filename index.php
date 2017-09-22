<?php session_start();

include 'request.php';
include 'musicapp.php';
include 'session.php';
include './views/view.php';
include './views/getsongview.php';

$session = new Session();
$musicapp = new MusicApp(new Request($_SERVER['REQUEST_URI']), $session);
$musicapp->run();
