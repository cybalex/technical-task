<?php

namespace Zoo\Animal\Species;

use Zoo\Animal\AnimalClass\Bird;

/**
 * Class Sparrow
 */
class Sparrow extends Bird
{
    /**
     * @return string
     */
    public function tweet(): string
    {
        return $this->getName().' tweets';
    }
}
