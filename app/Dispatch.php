<?php

namespace App;

use Src\Classes\ClassRoutes;

class Dispatch extends ClassRoutes
{
    private $method;
    private $parameter = array();
    private $controller;

    # Construct do Dispatch
    public function __construct ()
    {
        $this->addController();
    }

    protected function getMethod () { return $this->method; }
    public function setMethod ($newMethod) { $this->method = $newMethod; }
    
    protected function getParameter () { return $this->parameter; }
    public function setParameter ($newParameter) { $this->parameter = $newParameter; }

    # Método de adição de controller
    private function addController ()
    {
        $class = $this->getUrlRoute();
        $namespace = "App\\Controller\\{$class}";
        $this->controller = new $namespace;

        if(isset($this->parseUrlArray()[1]))
        {
            $this->addMethod();
        }
    }

    // #Método de adição de método do controller
    private function addMethod ()
    {
        if(method_exists($this->controller, $this->parseUrlArray()[1]))
        {
            $this->setMethod("{$this->parseUrlArray()[1]}");
            $this->addParameter();
            call_user_func_array([$this->controller, $this->getMethod()], $this->getParameter());
        }
    }
    
    // #Método de adição de parâmetro do controller
    private function addParameter ()
    {
        $urlArray = $this->parseUrlArray();
        $indexes = count($urlArray);
        
        if($indexes > 2)
        {
            foreach($urlArray as $key => $value)
            {
                if($key > 1)
                {
                    array_push($this->parameter, $value);
                }
            }
        }
    }
    
}

?>