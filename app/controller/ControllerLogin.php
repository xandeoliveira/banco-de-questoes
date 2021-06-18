<?php

namespace App\Controller;

use Src\Classes\ClassRender;
use App\Model\ClassConnection;

class ControllerLogin extends ClassConnection
{
    private $user;
    private $password;

    public function getUser(){ return $this->user; }
    public function setUser($user){ $this->user = $user; }
    public function getPassword(){ return $this->password; }
    public function setPassword($pass){ $this->password = $pass; }

    public function __construct ()
    {
        $render = new ClassRender();
        $render->setTitle("Login - Facilita Estudos");
        $render->setDescription("Página login do Facilita Estudos.");
        $render->setDirectory("/forms/login");
        $render->setKeyWords("login, facilita estudos");
        
        $render->renderLayout();
    }

    private function getPost ()
    {
        $this->setUser( $_POST["user"] );
        $this->setPassword( $_POST["password"] );

        $areEmpty = empty( $this->getUser() ) or empty( $this->getPassword() );

        if ( $areEmpty )
        {
            $_SESSION["warning"] = "Campos não podem ser vazios.";
            die();
        }
    }

    public function entrar ()
    {
        $this->getPost();
        $connection = $this->getConnection();
        
        $sql = "SELECT * FROM login
            WHERE `nome` = '{$this->getUser()}' OR `login` = '{$this->getUser()}'";

        $responseUser = $connection->query( $sql );
        if ( ! $responseUser )
        {
            $_SESSION["warning"] = "Usuário inválido.";
            die();
        }
        
        $password = md5( $this->getPassword() );
        $response = $responseUser->fetch_object();
        $isCorrectPassword =  $response->senha === $password;

        if ( ! $isCorrectPassword )
        {
            $_SESSION["warning"] = "Senha inválida.";
            die();
        }
        
        $_SESSION["logged"] = true;
        $_SESSION["user_id"] = $response->id;
        $_SESSION["name"] = $response->nome;
        $_SESSION["email"] = $response->login;
        $_SESSION["type"] = $response->tipo;

        $connection->close();

    }
}

?>