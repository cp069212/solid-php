<?php

class MusicReader
{
    private $musicExtend;

    public function __construct(MusicExtend $musicExtend)
    {
        $this->musicExtend = $musicExtend;
    }

    public function listen()
    {
        return $this->musicExtend->listen();
    }
}