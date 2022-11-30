<?php

namespace DesignPatterns\Adapter;

class Client
{
    private DataInterface $service;

    public function __construct(DataInterface $service)
    {
        $this->service = $service;
    }

    public function getMessage() : string
    {
        return $this->service->retrieveMessage();
    }

}