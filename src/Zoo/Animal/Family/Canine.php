<?php

namespace Zoo\Animal\Family;

use Zoo\Animal\AbstractAnimal;
use Zoo\Animal\Action\AttackInterface;
use Zoo\Animal\Action\SoundInterface;

/**
 * Class Canine
 */
abstract class Canine extends AbstractAnimal implements SoundInterface, AttackInterface
{
    /**
     * {@inheritdoc}
     */
    public function sound(): ?string
    {
        return static::class.' wuf';
    }

    /**
     * {@inheritdoc}
     */
    public function attack($victim)
    {
        echo $this->name . ' has bitten' . $victim;
    }
}
