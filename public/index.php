<?php

header("Content-Type: text/html; charset=utf-8");

require_once ("../config/config.php");
require_once ("../src/vendor/autoload.php");

use App\HelloWorld;
use Src\Classes\ClassRoutes;

class Teste
{
    public function __construct ()
    {
        $helloWorld = new HelloWorld();
        echo "<br>";

        $classRoutes = new ClassRoutes();
        $route = $classRoutes->getUrlRoute();

        var_dump($route);
    }
    
}

$teste = new Teste();