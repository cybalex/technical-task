<?php

namespace Zoo;

use Zoo\Animal\AbstractAnimal;

/**
 * Class Zoo
 */
class Zoo
{
    /**
     * @var array
     */
    private $animals;

    /**
     * Zoo constructor
     */
    public function __construct()
    {
        $this->animals = [];
    }

    /**
     * @param AbstractAnimal $animal
     *
     * @return Zoo
     */
    public function addAnimal(AbstractAnimal $animal): Zoo
    {
        //ToDo: implement method addAnimal(AbstractAnimal $animal)
    }

    /**
     * @param AbstractAnimal $animal
     *
     * @return Zoo
     */
    public function removeAnimal(AbstractAnimal $animal): Zoo
    {
        //ToDo: implement method removeAnimal(AbstractAnimal $animal)
    }

    /**
     * @return array
     */
    public function get(): array
    {
        return $this->animals;
    }
}
