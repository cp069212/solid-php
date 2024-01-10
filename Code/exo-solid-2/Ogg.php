<?php

require_once 'MusicExtend.php';

class Ogg extends MusicExtend 
{
    public function listen()
    {
        return 'Lecture du fichier Ogg '. $this->filename;
    }   
}