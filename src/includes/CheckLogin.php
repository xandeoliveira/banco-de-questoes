<?php

if ( ! isset( $_SESSION["logged"] ) || ! $_SESSION["logged"] )
{
    $style = "style='text-decoration: underline'";
    $login = "<a href='".DIRECTORYHOST."login/' {$style}>login</a>";
    echo "<p>Faça {$login} para ter acesso a este conteúdo.</p></main>";
    die();
}

?>