<?php

namespace Zoo\Animal\AnimalClass;

use Zoo\Animal\AbstractAnimal;
use Zoo\Animal\Action\RunInterface;
use Zoo\Animal\Action\WalkInterface;

/**
 * Class Mammal
 */
abstract class Mammal extends AbstractAnimal implements WalkInterface, RunInterface
{
    /**
     * @return string
     */
    public function run(): string
    {
        return $this->getName().' runs'.PHP_EOL;
    }

    /**
     * @return string
     */
    public function walk(): string
    {
        return $this->getName().' walks'.PHP_EOL;
    }
}
