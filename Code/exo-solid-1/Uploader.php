<?php

class Uploader
{
    public function getExtension()
    {
        $fileInformation = new FileInformation();
        return $fileInformation->getExtension($this->name);
    }
}