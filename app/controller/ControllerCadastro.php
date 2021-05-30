<?php

namespace App\Controller;

use Src\Classes\ClassRender;
use Src\Interfaces\InterfaceView;

class ControllerCadastro extends ClassRender implements InterfaceView
{
    public function __construct ()
    {
        $this->setTitle("Cadastro - Facilita Estudos");
        $this->setDescription("Página de cadastro de alunos Facilita Estudos.");
        $this->setDirectory("/forms/cadastro");
        $this->setKeyWords("cadastro, facilita estudos");
        
        $this->renderLayout();
    }
}

?>