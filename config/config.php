<?php

#Pasta interna (caso não esteja no diretório raíz)
$internalFolder = "banco-de-questoes/";

# Arquivos diretórios raízes para host e físico
    define("DIRECTORYHOST", "http://{$_SERVER['HTTP_HOST']}/{$internalFolder}");
    
    if (substr($_SERVER["DOCUMENT_ROOT"], -1) == "/")
    {
        define("DIRECTORYPHYSICAL", "{$_SERVER['DOCUMENT_ROOT']}{$internalFolder}");
    }
    else{
        define("DIRECTORYPHYSICAL", "{$_SERVER['DOCUMENT_ROOT']}/{$internalFolder}");
    }

# Diretórios Específicos
    define("DIRECTORYCSS", DIRECTORYPHYSICAL."public/css");
    define("DIRECTORYJS", DIRECTORYPHYSICAL."public/js");
    define("DIRECTORYHTML", DIRECTORYPHYSICAL."public/html");
    define("DIRECTORYFONTES", DIRECTORYPHYSICAL."public/fontes");

# Banco de dados
    define("HOST", "localhost");
    define("USER", "root");
    define("PASSWORD", "");
    define("DATABASE", "db_banco_de_questoes");
?>