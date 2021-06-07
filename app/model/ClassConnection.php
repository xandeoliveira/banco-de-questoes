<?php

namespace App\Model;

class ClassConnection
{

    protected function getConnection ()
    {
        $connection = new \mysqli( HOST, USER, PASSWORD, DATABASE );

        if ( ! $connection ) die("Erro na conexão com o servidor. ".$connection->error);
        
        return $connection;
    }
    
}

?>