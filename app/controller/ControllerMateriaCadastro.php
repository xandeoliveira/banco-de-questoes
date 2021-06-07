<?php

namespace App\Controller;

use Src\Classes\ClassRender;
use App\Model\ClassConnection;

class ControllerMateriaCadastro extends ClassConnection
{
    public function __construct ()
    {
        $render = new ClassRender();
        $render->setTitle("Matérias - Cadastro - Facilita Estudos");
        $render->setDescription("Página onde são cadastradas novas matérias.");
        $render->setDirectory("/materia-cadastrar");
        $render->setKeyWords("matérias, cadastro, facilita estudos");
        
        $render->renderLayout();
    }

    private function getPost ()
    {
        $materia = trim( $_POST["materia"] );
        if ( empty( $materia ) )
            die();

        return ucfirst( $materia );
    }

    public function novo ()
    {
        $name = $this->getPost();
        $sql = "INSERT INTO disciplina (s_nome_disciplina) VALUES ('$name')";

        $connection = $this->getConnection();
        $return = $connection->query( $sql );
        $connection->close();

        return $return ? "Inserida" : "Não inderida";
    }
    
    public function listMaterias ()
    {
        $sql = "SELECT * FROM disciplina";
        $connection = $this->getConnection();
        $response = $connection->query( $sql );
        $connection->close();
        
        return $response->num_rows > 0 ? $response : false;
    }
}

?>