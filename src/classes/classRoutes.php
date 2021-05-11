<?php

namespace Src\Classes;

use Src\Traits\TraitUrlParser;

class ClassRoutes
{
    use TraitUrlParser;

    private $route;

    # Método para pegar a rota
    public function getUrlRoute ()
    {
        $url = $this->parseUrlArray();
        $controller = $url[0];

        $this->route = array(
            "" => "ControllerHome",
            "home" => "ControllerHome",
            "materia" => "ControllerMateria",
            "assunto" => "ControllerAssunto",
            "questao" => "ControllerQuestao",
        );

        if (array_key_exists($controller, $this->route)) {
            if (file_exists(DIRECTORYPHYSICAL."app/controller/{$this->route[$controller]}.php"))
            {
                return $this->route[$controller];
            }
            else
            {
                return "ControllerHome";
            }
        }
        else
        {
            return "Controller404";
        }
    }
    
}

?>