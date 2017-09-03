<?php

namespace Zoo\Animal\AnimalClass;

use Zoo\Animal\AbstractAnimal;
use Zoo\Animal\Action\FlyInterface;
use Zoo\Animal\Action\WalkInterface;

/**
 * Class Bird
 */
class Bird extends AbstractAnimal implements FlyInterface, WalkInterface
{
    /**
     * {@inheritdoc}
     */
    public function fly(): string
    {
        return $this->getName().' flies'.PHP_EOL;
    }

    /**
     * @return string
     */
    public function walk(): string
    {
        return $this->getName().' walks'.PHP_EOL;
    }
}
