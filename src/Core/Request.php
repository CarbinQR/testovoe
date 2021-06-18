<?php

namespace src\Core;

class Request
{
    private string $controller = 'Index';
    private string $method = 'index';
    private string $param;

    public function __construct()
    {
        $uri = explode('/', $_SERVER['REQUEST_URI']);
        $uri = array_diff($uri, []);

        // controller
        if (isset($uri[1]) && !empty($uri[2])) {
            $this->controller = ucfirst($uri[2]);
        }

        // method
        if (isset($uri[3])) {
            $this->method = $uri[3];
        }

        //param
        if (isset($uri[4])) {
            $this->param = $uri[4];
        }
    }

    public function validateCommand()
    {
        if (!class_exists("src\Controllers\\{$this->controller}Controller")) {
            var_dump("src\Controllers\\{$this->controller}Controller does not exists!");

            return false;
        }

        if (!method_exists("src\Controllers\\{$this->controller}Controller", $this->method)) {
            var_dump("Method {$this->method} does not exists!");

            return false;
        }

        return true;
    }

    public function getController(): string
    {
        return "src\Controllers\\{$this->controller}Controller";
    }

    public function getMethod(): string
    {
        return $this->method;
    }

    public function getParam(): string
    {
        return $this->param;
    }
}