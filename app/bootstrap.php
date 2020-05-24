<?php
// Load config

require_once 'config/config.php';
require_once 'helpers/function_custom.php';

//Autoload core Libraries
spl_autoload_register(function($className){
    require_once 'libraries/' . $className . '.php';
    
});