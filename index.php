<?php

include 'request.php';
include 'musicapp.php';
include 'session.php';
include 'song.php';
include 'list.php';
include 'helpers.php';
include './views/view.php';
include './views/getsongview.php';

session_start();

$session = new Session();
$request = new Request($_SERVER['REQUEST_URI']);
$musicapp = new MusicApp($request, $session);
$musicapp->run();
