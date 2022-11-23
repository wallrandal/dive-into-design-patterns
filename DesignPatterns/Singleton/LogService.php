<?php

namespace DesignPatterns\Singleton;

class LogService extends Singleton
{
    private $fileHandle;

    /**
     * como o singleton é chamado apenas uma vez
     * somente um stdout é aberto. 
     */
    protected function __construct()
    {
        $this->fileHandle = fopen('php://stdout', 'w');   
    }


    public function writeLog(string $message) : void
    {
        $date = date('d/m/Y');
        fwrite($this->fileHandle, "{$date}: {$message}\n");
    }

    public static function log(string $message) : void
    {
        $logger = self::getInstance();
        $logger->writeLog($message);
    }
}