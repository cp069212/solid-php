<?php

require_once 'MusicExtend.php';

class Mp3 extends MusicExtend
{
    public function listen()
    {
        return 'Lecture du fichier Mp3 '. $this->filename;
    }
}