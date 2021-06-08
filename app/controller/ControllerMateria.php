<?php

namespace App\Controller;

use Src\Classes\ClassRender;
use App\Model\ClassConnection;

class ControllerMateria extends ClassConnection
{
    public function __construct ()
    {
        $render = new ClassRender();
        $render->setTitle("Matérias - Facilita Estudos");
        $render->setDescription("Página onde as matérias ficam listadas.");
        $render->setDirectory("/materia");
        $render->setKeyWords("matérias, facilita estudos");
        
        $render->renderLayout();
    }

    public function listGridMaterias ()
    {
        $sql = "SELECT * FROM disciplina";
        $connection = $this->getConnection();
        $response = $connection->query( $sql );
        $connection->close();
        
        return $response->num_rows > 0 ? $response : false;
    }
}

?>