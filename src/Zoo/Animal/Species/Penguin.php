<?php

namespace Zoo\Animal\Species;

use Zoo\Animal\AnimalClass\Bird;
use Zoo\Exception\InvalidBehaviourException;

/**
 * Class Penguin
 */
class Penguin extends Bird
{
    /**
     * Penguins don't fly
     *
     * {@inheritdoc}
     */
    public function fly(): string
    {
        throw new InvalidBehaviourException();
    }
}
