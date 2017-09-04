<?php

namespace Zoo\Animal\AbstractAnimal\Test;

use PHPUnit\Framework\TestCase;

/**
 * Class AbstractAnimalTest
 */
class AbstractAnimalTest extends TestCase
{
    public function testName()
    {
        $abstractAnimal = $this->getMockForAbstractClass('\Zoo\Animal\AbstractAnimal', ['the_name']);

        $this->assertTrue(strpos($abstractAnimal->getName(), 'the_name') > -1);
    }
}
