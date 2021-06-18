<?php

namespace src\Core;

class App
{
    public function run()
    {
        $request = new Request();

        if (! $request->validateCommand()) {
            dump('Invalid command');

            return ;
        }

        $controllerName = $request->getController();
        $method = $request->getMethod();
        $param = $request->getParam();


        $controller = new $controllerName;
        $controller->$method($param);
    }
}