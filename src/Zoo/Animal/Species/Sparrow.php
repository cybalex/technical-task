<?php

namespace Zoo\Animal\Species;

use Zoo\Animal\AnimalClass\Bird;

/**
 * Class Sparrow
 */
class Sparrow extends Bird
{
    public function tweet(): string
    {
        return $this->getName().' tweet';
    }
}
