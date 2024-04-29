<?php

// Autoloader
spl_autoload_register(function ($className) {
    // classes
    $fileName = "Classes/".$className.".php";
    
    if (file_exists($fileName)) {
        require_once $fileName;
    }
    
    // controllers
    $fileName = "Controllers/".$className.".php";
    if (file_exists($fileName)) {
        require_once $fileName;
    }
});