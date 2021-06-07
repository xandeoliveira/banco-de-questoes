<?php

namespace App\Controller;

use Src\Classes\ClassRender;
use Src\Interfaces\InterfaceView;

class ControllerQuestaoCadastro extends ClassRender implements InterfaceView
{
    public function __construct ()
    {
        $this->setTitle("Questão - Facilita Estudos");
        $this->setDescription("Página onde as questôes são cadastradas.");
        $this->setDirectory("/questao-cadastrar");
        $this->setKeyWords("questão, cadastrar, facilita estudos");
        
        $this->renderLayout();
    }
}

?>