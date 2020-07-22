<?php
//load configufration and helper functions 

require_once(ROOT . DS . 'config' .DS . 'config.php');
require_once(ROOT . DS . 'app' . DS . 'lib'.DS. 'helpers' . DS . 'functions.php');

//autoload our classes
function __autoload($classname){
    if(file_exists(ROOT .DS .'core'. DS . $classname .'.php')){
        require_once(ROOT .DS .'core'. DS . $classname .'.php');
    }elseif(ROOT .DS .'app'. DS . 'controllers' .DS.  $classname .'.php'){
        require_once(ROOT .DS .'app'. DS . 'controllers' . DS .  $classname .'.php');
    }elseif(ROOT .DS .'app'. DS . 'models' .DS.  $classname .'.php'){
        require_once(ROOT .DS .'app'. DS . 'models' .DS.  $classname .'.php');
    }
}

//Route the requests
Router::route($url);