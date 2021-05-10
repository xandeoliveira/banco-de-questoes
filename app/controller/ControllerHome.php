<?php

namespace App\Controller;

use Src\Classes\ClassRender;
use Src\Interfaces\InterfaceView;

class ControllerHome extends ClassRender implements InterfaceView
{
    public function __construct ()
    {
        $this->setTitle("Home - Facilita Estudos");
        $this->setDescription("Página home do Facilita Estudos.");
        $this->setDirectory("/home");
        $this->setKeyWords("home, facilita estudos");
        
        $this->renderLayout();
    }
}

?>