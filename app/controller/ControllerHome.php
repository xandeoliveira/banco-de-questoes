<?php

namespace App\Controller;

use Src\Classes\ClassRender;
use Src\Interfaces\InterfaceView;

class ControllerHome extends ClassRender implements InterfaceView
{
    public function __construct ()
    {
        $this->setTitle("Home - Matérias - Facilita Estudos");
        $this->setDescription("Página onde as matérias ficam listadas.");
        $this->setDirectory("/home");
        $this->setKeyWords("matérias, facilita estudos, home");
        
        $this->renderLayout();
    }
}

?>