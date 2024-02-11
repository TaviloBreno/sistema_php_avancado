<?php

require_once "../vendor/autoload.php";

use bng\System\Router;

Router::dispatch();

$nomes = ['João', 'Ana', 'Pedro', 'Carlos'];


printData($nomes);