<?php

namespace Zoo\Animal\Species;

use Zoo\Animal\AnimalClass\Mammal;

/**
 * Class Rat
 */
class Rat extends Mammal
{
    /**
     * @return string
     */
    public function pi(): string
    {
        return $this->getName().' pi';
    }
}
