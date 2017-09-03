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
     * @var Penguin
     */
    private $penguin;

    public function setUp()
    {
        $this->penguin = new Penguin('Freddy');
    }

    public function testFly()
    {
        $this->expectException(InvalidBehaviourException::class);
        $this->penguin->fly();
    }
}
