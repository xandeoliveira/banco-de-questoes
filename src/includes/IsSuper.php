<?php

$isSuper = $_SESSION["type"] === "administrador" || $_SESSION["type"] === "professor";
if ( ! $isSuper )
{
    die();
}

?>