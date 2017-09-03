<?php

namespace Zoo\Animal\Species;

use Zoo\Animal\Action\AttackInterface;
use Zoo\Animal\AnimalClass\Mammal;

/**
 * Class Dog
 */
class Dog extends Mammal implements AttackInterface
{
    /**
     * {@inheritdoc}
     */
    public function byte($object)
    {
        return $this->getName().' has bitten '.$object.PHP_EOL;
    }

    /**
     * @return string
     */
    public function wuf(): string
    {
        return $this->getName().' wuf';
    }
}
