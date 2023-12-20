<?php

class FileInformation
{
    private $name;
    private $type;
    public $directory = '';
    public $validTypes = [];

    public function __construct($file)
    {
        $fileData = $_FILES[$file];
        $this->temporaryName = $fileData['tmp_name'];
        $this->name = $fileData['name'];
        $this->type = $fileData['type'];
        $this->validTypes = ['PNG', 'png', 'jpeg', 'jpg', 'JPG'];
    }

    public function uploadFile()
    {
        if (!in_array($this->type, $this->validTypes)) {
            $this->error = 'Le fichier ' . $this->name . ' n\'est pas d\'un type valide';

            return false;
        } else {
            return true;
        }
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getType()
    {
        return $this->type;
    }

    public function getName()
    {
        return $this->name;
    }
}
