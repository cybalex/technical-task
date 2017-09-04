<?php

namespace Zoo\Animal;

use Zoo\Animal\Action\EatInterface;

/**
 * Class AbstractAnimal
 */
abstract class AbstractAnimal implements EatInterface
{
    /**
     * @var string
     */
    protected $name;

    /**
     * AbstractAnimal constructor
     *
     * @param string $name
     */
    public function __construct(string $name = null)
    {
        $class = strtolower((new \ReflectionClass(static::class))->getShortName());
        $this->name = empty($name) ? ucfirst($class) : ucfirst($class)." ".$name;
    }

    /**
     * @return string
     */
    function __toString(): string
    {
        return static::getName();
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * {@inheritdoc}
     */
    public function eat(string $food): string
    {
        return static::getName().' eats '.$food.PHP_EOL;
    }
}
