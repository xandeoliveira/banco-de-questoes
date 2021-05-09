<?php

namespace App\Controller;

class ControllerHome
{
    public function home ()
    {
        // require_once (DIRECTORYHTML."/index.html");
        echo "<h1>Você está na página HOME de matérias.</h1><hr><p>Bem vindo!</p>";
    }
    
    public function assuntos ($index)
    {
        echo "<hr><h1>Você está na página Assuntos de matérias {$index}.</h1><hr><p>Olá!</p>";
    }
}

?>