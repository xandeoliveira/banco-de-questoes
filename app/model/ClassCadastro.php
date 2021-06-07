<?php

namespace App\Model;

use App\Model\ClassConnection;

class ClassCadastro extends ClassConnection
{
    private function getSql ()
    {
        if ( ! isset( $_POST ) ) return;

        $name = $_POST["name"]; $login = $_POST["login"]; $password = $_POST["password"];
        $havePostEmpty = ! $name || ! $login || ! $password;

        if ( $havePostEmpty ) return;
        
        return
            "INSERT INTO `pessoa`(`s_nome_pessoa`, `s_login_pessoa`, `s_senha_pessoa`) VALUES ('$name', '$login', '$password')";
        // "INSERT INTO pessoa ( s_nome_pessoa, s_login_pessoa, s_senha_pessoa ) VALUES ( '".$name."', '".$login."', '".$password."' )";
            // "INSERT INTO `pessoa`(`s_nome_pessoa`, `s_login_pessoa`, `s_senha_pessoa`) VALUES (\'$name\', \'$login\', \'$password\')";
    }

    public function novo ()
    {
        $connection = $this->getConnection();
        $sql = $this->getSql();
        
        $inserted = $connection->query( $sql )
        $connection->close();
        
        return $inserted
            ? "Usuário Cadastrado."
            : "Não foi possível completar o cadastro.";
    }
}
?>