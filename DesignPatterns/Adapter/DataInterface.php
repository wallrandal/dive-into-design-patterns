<?php

namespace DesignPatterns\Adapter;

/**
 * O DataInterface representa a interface que
 * gostaríamos que todos os serviços seguissem
 */
Interface DataInterface
{
    public function retrieveMessage() : string;
}