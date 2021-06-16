<?php

namespace src\Core;

class View
{
    public static function render($view, $data = [])
    {
        $viewPath = __DIR__."/../../views/{$view}.tpl.php";

        if (file_exists($viewPath)) {
            include $viewPath;
        }
    }
}