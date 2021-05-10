<?php

namespace App\Controller;

use Src\Classes\ClassRender;
use Src\Interfaces\InterfaceView;

class ControllerAssunto extends ClassRender implements InterfaceView
{
    public function __construct ()
    {
        $this->setTitle("Assunto - Facilita Estudos");
        $this->setDescription("Página onde os assuntos estão listados.");
        $this->setDirectory("/assunto");
        $this->setKeyWords("assunto, facilita estudos");
        
        $this->renderLayout();
    }
}

?>