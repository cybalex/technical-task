<?php

namespace Zoo\Animal\AnimalClass;

use Zoo\Animal\AbstractAnimal;
use Zoo\Animal\Action\SwimInterface;

/**
 * Class Fish
 */
abstract class Fish extends AbstractAnimal implements SwimInterface
{
    /**
     * {@inheritdoc}
     */
    public function swim(): string
    {
        return static::getName().' swims'.PHP_EOL;
    }
}
