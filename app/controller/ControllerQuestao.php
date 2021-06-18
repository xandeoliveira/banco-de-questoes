<?php

namespace App\Controller;

use Src\Classes\ClassRender;
use App\Model\ClassConnection;

class ControllerQuestao extends ClassConnection
{
    public function __construct ()
    {
        $render = new ClassRender();
        $render->setTitle("Questão - Facilita Estudos");
        $render->setDescription("Página onde as questões ficam listadas.");
        $render->setDirectory("/questao");
        $render->setKeyWords("questao, facilita estudos");
        
        $render->renderLayout();
        $_SESSION["assunto"] = isset( $_POST["id"] ) ? $_POST["id"] : false;
    }

    public function listGridQuestoes ()
    {
        $assunto = $_SESSION["assunto"];

        $sql = "SELECT `s_enunciado_questao` as enunciado, `i_id_questao` as id
            FROM `questao` WHERE `assunto_i_id_assunto` = '".$assunto."'";
        $connection = $this->getConnection();
        $response = $connection->query( $sql );
        $connection->close();
        
        return $response->num_rows > 0 ? $response : false;
    }
}

?>