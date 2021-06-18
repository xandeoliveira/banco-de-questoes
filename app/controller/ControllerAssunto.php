<?php

namespace App\Controller;

use Src\Classes\ClassRender;
use App\Model\ClassConnection;

class ControllerAssunto extends ClassConnection
{
    private $id;

    public function __construct ()
    {
        $render = new ClassRender();
        $render->setTitle("Assunto - Facilita Estudos");
        $render->setDescription("Página onde os assuntos estão listados.");
        $render->setDirectory("/assunto");
        $render->setKeyWords("assunto, facilita estudos");
        
        $render->renderLayout();
        $_SESSION["materia"] = isset( $_POST["id"] ) ? $_POST["id"] : false;
    }

    public function listGridAssuntos ()
    {
        $sql = "SELECT * FROM assunto WHERE `disciplina_i_id_disciplina` = '".$_SESSION["materia"]."'";
        $connection = $this->getConnection();
        $response = $connection->query( $sql );
        $connection->close();
        
        return $response->num_rows > 0 ? $response : false;
    }

}

?>
