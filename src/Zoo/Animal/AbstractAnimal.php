<?php

namespace Zoo\Animal;

/**
 * Class AbstractAnimal
 */
abstract class AbstractAnimal
{
    /**
     * @var string
     */
    public $name;

    /**
     * AbstractAnimal constructor
     *
     * @param string $name
     */
    public function __construct(string $name = null)
    {
        $class = strtolower((new \ReflectionClass(static::class))->getShortName());
        $this->name = empty($name) ? $class : $class." ".$name;
    }

    function __toString()
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
}
