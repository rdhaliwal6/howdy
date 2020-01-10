<?php

//turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//Require the autoload file
require_once('vendor/autoload.php');

//Create an instance of the Base class
$f3 = Base::instance();

//define a default route
$f3->route('GET /', function (){
//    $view = new Template();
//    echo  $view->render
//    ('views/home.html');
    echo '<h1>Howdy</h1>';
}
);

//Run fat free
$f3 -> run();
