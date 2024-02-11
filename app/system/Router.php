<?php
namespace bng\System;

class Router
{
    public static function dispatch()
    {
        $httpverb = $_SERVER['REQUEST_METHOD'];
        $controller = "main";
        $method = 'index';

        if (isset($_GET['ct'])) {
            $controller = $_GET['ct'];
        }

        if(isset($_GET['mt'])){
            $method = $_GET['mt'];
        }

        $parameters = $_GET;

        if(key_exists('ct', $parameters)){
            unset($parameters['ct']);
        }

        if(key_exists('mt', $parameters)){
            unset($parameters['mt']);
        }

        var_dump($httpverb);
        var_dump($controller);
        var_dump($method);
        var_dump($parameters);
    }
}