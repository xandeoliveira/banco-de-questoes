<?php

namespace Src\Classes;

class ClassRender
{
# Propriedades
    private $directory;
    private $title;
    private $description;
    private $keyWords;

# Getters and Setters das propriedades
    public function getDirectory () { return $this->directory; }
    public function setDirectory ($dir) { $this->directory = $dir; }

    public function getTitle () { return $this->title; }
    public function setTitle ($title) { $this->title = $title; }

    public function getDescription () { return $this->description; }
    public function setDescription ($desc) { $this->description = $desc; }

    public function getKeyWords () { return $this->keyWords; }
    public function setKeyWords ($kwords) { $this->keyWords = $kwords; }

# Método para renderizar o layout das páginas
    public function renderLayout ()
    {
        include_once(DIRECTORYPHYSICAL."app/layout.php");
    }

# Cada método adiciona características específicas para sua tag
    public function addHead ()
    {
        $file = DIRECTORYVIEW."/{$this->getDirectory()}/head.php";
        if(file_exists($file))
        {
            include ($file);
        }
    }

    public function addHeader ()
    {
        $file = DIRECTORYVIEW."/{$this->getDirectory()}/header.php";
        if(file_exists($file))
        {
            include ($file);
        }
    }

    public function addMain ()
    {
        $file = DIRECTORYVIEW."/{$this->getDirectory()}/main.php";
        if(file_exists($file))
        {
            include ($file);
        }
    }

    public function addFooter ()
    {
        $file = DIRECTORYVIEW."/{$this->getDirectory()}/footer.php";
        if(file_exists($file))
        {
            include ($file);
        }
    }
    
}

?>