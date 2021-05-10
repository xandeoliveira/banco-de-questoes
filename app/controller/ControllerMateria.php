<?php

namespace App\Controller;

use Src\Classes\ClassRender;
use Src\Interfaces\InterfaceView;

class ControllerMateria extends ClassRender implements InterfaceView
{
    public function __construct ()
    {
        $this->setTitle("Matérias - Facilita Estudos");
        $this->setDescription("Página onde as matérias ficam listadas.");
        $this->setDirectory("/materia");
        $this->setKeyWords("matérias, facilita estudos");
        
        $this->renderLayout();
    }
}

?>