<?php

namespace App\Controller;

use Src\Classes\ClassRender;
use App\Model\ClassConnection;

class ControllerAssuntoCadastro extends ClassConnection
{
    public function __construct ()
    {
        $render = new ClassRender();
        $render->setTitle("Assunto - Cadastro - Facilita Estudos");
        $render->setDescription("Página onde são cadastradas novos assuntos.");
        $render->setDirectory("/assunto-cadastrar");
        $render->setKeyWords("assuntos, cadastro, facilita estudos");
        
        $render->renderLayout();
    }

    private function getPost ()
    {
        $assunto = trim( $_POST["assunto"] );
        $materia = trim( $_POST["materia"] );

        if ( empty( $assunto ) || empty( $materia ) )
            die();

        return array("assunto" => ucfirst( $assunto ), "materia" => $materia ) ;
    }

    public function novo ()
    {
        $post = $this->getPost();

        $assunto = $post["assunto"];
        $materia = $post["materia"];
        $sql = "INSERT INTO assunto (s_nome_assunto, disciplina_i_id_disciplina	) VALUES ('$assunto', '$materia')";

        $connection = $this->getConnection();
        $return = $connection->query( $sql );
        $connection->close();

        return $return ? "Inserido" : "Não inserido";
    }

    public function listAssuntos ()
    {
        $sql = "SELECT * FROM assunto";
        $connection = $this->getConnection();
        $response = $connection->query( $sql );
        $connection->close();
        
        return $response->num_rows > 0 ? $response : false;
    }
}

?>