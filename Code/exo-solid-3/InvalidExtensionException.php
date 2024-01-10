<?php 

require_once 'InvalidFileException.php';

class InvalidExtensionException extends InvalidFileException
{
    public function __construct($expected, $received)
    {
        $message = sprintf(
            'Fichier attendu : "%s", fichier reçu : "%s"',
            $expected,
            $received
        );

        return parent::__construct($message);
    }
}