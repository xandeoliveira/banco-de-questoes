<?php

#Pasta interna (caso não esteja no diretório raíz)
$internalFolder = "";

# Arquivos diretórios raízes
    define("DIRECTORYROOT", "http://{$_SERVER['HTTP_HOST']}/{$internalFolder}");

# Diretórios Específicos
    define("DIRECTORYCSS", DIRECTORYROOT."public/css");
    define("DIRECTORYJS", DIRECTORYROOT."public/js");
    define("DIRECTORYHTML", DIRECTORYROOT."public/html");
    define("DIRECTORYFONTES", DIRECTORYROOT."public/fontes");

# Banco de dados
    define("HOST", "localhost");
    define("USER", "root");
    define("PASSWORD", "");
    define("DATABASE", "db_banco_de_questoes");
?>