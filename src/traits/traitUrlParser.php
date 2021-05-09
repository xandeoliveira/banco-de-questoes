<?php

namespace Src\Traits;

trait TraitUrlParser
{
# Dividir url
    public function parseUrlArray ()
    {
        return explode("/", rtrim($_GET["url"]), FILTER_SANITIZE_URL);
    }
}

?>