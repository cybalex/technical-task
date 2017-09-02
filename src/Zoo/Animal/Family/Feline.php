<?php

namespace Zoo\Animal\Family;

use Zoo\Animal\AbstractAnimal;
use Zoo\Animal\Action\SoundInterface;

/**
 * Class Feline
 */
abstract class Feline extends AbstractAnimal implements SoundInterface
{
    /**
     * {@inheritdoc}
     */
    public function sound(): ?string
    {
        return static::class.' meow';
    }
}
