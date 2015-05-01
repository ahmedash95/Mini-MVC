<?php

session_start(); 

define('PATH',realpath(""));
define('URL','http://localhost:8080/sandbox/mvc3/');
define('DS',DIRECTORY_SEPARATOR);

require PATH.DS.'config'.DS.'config.php';
require PATH.DS.'libs'.DS.'main_model.php';
require PATH.DS.'libs'.DS.'functions.php';
require PATH.DS.'libs'.DS.'app.php';
require PATH.DS.'libs'.DS.'main_controller.php';


$app = new App();



