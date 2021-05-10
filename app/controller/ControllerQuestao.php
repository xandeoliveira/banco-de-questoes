<?php

namespace App\Controller;

use Src\Classes\ClassRender;
use Src\Interfaces\InterfaceView;

class ControllerQuestao extends ClassRender implements InterfaceView
{
    public function __construct ()
    {
        $this->setTitle("Questão - Facilita Estudos");
        $this->setDescription("Página onde as questões ficam listadas.");
        $this->setDirectory("/questao");
        $this->setKeyWords("questao, facilita estudos");
        
        $this->renderLayout();
    }
}

?>