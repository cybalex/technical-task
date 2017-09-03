<?php

namespace Zoo\Animal\Species;

use Zoo\Animal\AnimalClass\Mammal;

/**
 * Class Cat
 */
class Cat extends Mammal
{
    /**
     * @return string
     */
    public function meow(): string
    {
        return $this->getName().' meow'.PHP_EOL;
    }
}
