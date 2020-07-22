<?php

define('DS', DIRECTORY_SEPARATOR);
define('ROOT', dirname(__FILE__)); 


//load configufration and helper functions 
require_once(ROOT . DS . 'config' .DS . 'config.php');
require_once(ROOT . DS . 'app' . DS . 'lib'.DS. 'helpers' . DS . 'functions.php');

//autoload our classes
function autoload($classname){
    if(file_exists(ROOT .DS .'core'. DS . $classname .'.php')){
        require_once(ROOT .DS .'core'. DS . $classname .'.php');
    }elseif(ROOT .DS .'app'. DS . 'controllers' .DS.  $classname .'.php'){
        require_once(ROOT .DS .'app'. DS . 'controllers' . DS .  $classname .'.php');
    }elseif(ROOT .DS .'app'. DS . 'models' .DS.  $classname .'.php'){
        require_once(ROOT .DS .'app'. DS . 'models' .DS.  $classname .'.php');
    }
}

spl_autoload_register('autoload');
session_start();

//split the url into an array of strings the remove whitespaces
$url = isset($_SERVER['PATH_INFO'])? explode('/', ltrim($_SERVER['PATH_INFO'], '/')): [];

//Route the requests
Router::route($url);
