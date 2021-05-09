<?php

header("Content-Type: text/html; charset=utf-8");

require_once ("../config/config.php");
require_once ("../src/vendor/autoload.php");

use App\Dispatch;
use Src\Classes\ClassRoutes;

class Teste
{
    public function __construct ()
    {
        $dispatch = new Dispatch();
    }
    
}

$teste = new Teste();