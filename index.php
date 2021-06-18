<?php

use \src\Core\App;

header("Access-Control-Allow-Origin: http://localhost:8080");

spl_autoload_register(function ($class) {
    $path = str_replace('\\', '/', $class.'.php');
    if (file_exists($path)) {
        require $path;
    }
});

$app = new App;

$app->run();