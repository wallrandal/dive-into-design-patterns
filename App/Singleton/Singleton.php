<?php

namespace App\Singleton;

class Singleton
{

    /**
     * armazena as instancias. É um array porque
     * aceita subclasses. 
     * 
     */
    private static $instances = [];

    /**
     * o construtor do singleton é sempre privado
     * para prevenir que outras classes a chamem por um 
     * new LogService().
     */
    protected function __construct()
    {
        
    }
    
    /**
     * Singletons não podem ser clonáveis.
     */
    protected function __clone()
    {
        
    }

    /**
     * getInstance()
     * método estático que controla o acesso à instâncias
     * pelo nome das suas subclasses
     */
    public static function getInstance() : LogService
    {
        $subclass = static::class; 
        if (!isset(self::$instances[$subclass])) {
            self::$instances[$subclass] = new static();
        }

        return self::$instances[$subclass];
    }
}