<?php

namespace Zoo\Animal\Species;

use Zoo\Animal\Action\SwimInterface;
use Zoo\Animal\AnimalClass\Mammal;
use Zoo\Exception\InvalidBehaviourException;

/**
 * Class Dolphin
 */
class Dolphin extends Mammal implements SwimInterface
{
    /**
     * @return string
     */
    public function swim(): string
    {
        return $this->getName().' swims'.PHP_EOL;
    }

    /**
     * @return string
     */
    public function run(): string
    {
        throw new InvalidBehaviourException();
    }

    /**
     * @return null|string
     */
    public function walk(): string
    {
        throw new InvalidBehaviourException();
    }
}
