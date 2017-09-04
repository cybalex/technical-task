<?php

namespace Zoo\Animal\Species\Test;

use PHPUnit\Framework\TestCase;
use Zoo\Animal\Species\Penguin;
use Zoo\Exception\InvalidBehaviourException;

/**
 * Class PenguinTest
 */
class PenguinTest extends TestCase
{
    /**
     * Test penguin cannot fly
     */
    public function testFly()
    {
        $penguin = new Penguin('Freddy');
        $this->expectException(InvalidBehaviourException::class);
        $penguin->fly();
    }
}
