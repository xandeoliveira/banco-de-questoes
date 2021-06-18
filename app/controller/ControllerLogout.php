<?php

namespace App\Controller;

class ControllerLogout
{
    public function __construct ()
    {
        session_unset();
        session_destroy();
        header("Location: ".DIRECTORYHOST."home/");
    }

}

?>