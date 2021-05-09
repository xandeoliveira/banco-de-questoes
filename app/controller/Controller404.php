<?php

namespace App\Controller;

class Controller404
{
    public function __construct ()
    {
        echo "<p>Esta página que você tentou acessar não existe</p>";
        echo "<hr>";
        echo "<h1>Error 404, not found.</h1>";
    }
    
}

?>