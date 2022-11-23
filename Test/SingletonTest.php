<?php

namespace Test;

use DesignPatterns\Singleton\LogService;
use PHPUnit\Framework\TestCase;

class SingletonTest extends TestCase
{
    public function testLogTwiceWithSameInstance()
    {
        $log1 = LogService::getInstance();
        $log2 = LogService::getInstance();
        $this->assertEquals($log1, $log2);
    }
}