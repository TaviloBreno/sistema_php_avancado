<?php

namespace bng\Controllers;

abstract class BaseController
{
    public function view($view, $data = [])
    {
        if(!is_array($data)){
            die('Data não é um array: '.var_dump($data)); 
        }

        extract($data);

        if(file_exists("../app/views/$view.php")){
            require_once "../app/views/$view.php";
        }else{
            die("A view não foi encontrada! ".$view);
        }
    }
}