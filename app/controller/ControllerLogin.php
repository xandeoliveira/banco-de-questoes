<?php

namespace App\Controller;

use Src\Classes\ClassRender;
use Src\Interfaces\InterfaceView;

class ControllerLogin extends ClassRender implements InterfaceView
{
    public function __construct ()
    {
        $this->setTitle("Login - Facilita Estudos");
        $this->setDescription("Página login do Facilita Estudos.");
        $this->setDirectory("/forms/login");
        $this->setKeyWords("login, facilita estudos");
        
        $this->renderLayout();
    }
}

?>