<?php

require_once 'Mp3.php';
require_once 'Ogg.php';

class MusicType extends MusicReader
{
    private $filename;

    public function __construct($filename)
    {
        $this->filename = $filename;
    }

    public function getType($filetype)
    {
        $filetype = pathinfo($this->filename, PATHINFO_EXTENSION);
    }
}