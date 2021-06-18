<?php

namespace App\Controller;

use Src\Classes\ClassRender;
use App\Model\ClassConnection;

class ControllerCadastro extends ClassConnection
{
    public function __construct ()
    {
        $render = new ClassRender();
        $render->setTitle("Cadastro - Facilita Estudos");
        $render->setDescription("Página de cadastro de alunos Facilita Estudos.");
        $render->setDirectory("/forms/cadastro");
        $render->setKeyWords("cadastro, facilita estudos");
        
        $render->renderLayout();
    }

    private function getSql ()
    {
        if ( ! isset( $_POST ) ) return;

        $name = $_POST["name"]; $login = $_POST["login"]; $password = $_POST["password"];
        $havePostEmpty = ! $name || ! $login || ! $password;

        if ( $havePostEmpty ) return;
        
        $password = md5( $password );
        return
            "INSERT INTO `pessoa`(`s_nome_pessoa`, `s_login_pessoa`, `s_senha_pessoa`) VALUES ('$name', '$login', '$password')";
    }

    public function novo ()
    {
        $connection = $this->getConnection();
        $sql = $this->getSql();
        
        $inserted = $connection->query( $sql );
        $connection->close();
        
        if ( $inserted )
        {
            $_SESSION["warning"] = "Usuário cadastrado.";
            header("Location: ".DIRECTORYHOST."login/");
        }
        else
        { $_SESSION["warning"] = "Não foi possível completar o cadastro."; }
    }
}

?>