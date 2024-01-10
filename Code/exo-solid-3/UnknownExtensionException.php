<?php

require_once 'InvalidFileException.php';

class UnknownExtensionException extends InvalidFileException
{
    public function __construct()
    {
        return parent::__construct('Extension de fichier inconnue');
    }
}