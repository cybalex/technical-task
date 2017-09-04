<?php

namespace Zoo;

use Zoo\Animal\AbstractAnimal;

/**
 * Class ZooFactory
 */
class ZooFactory
{
    /**
     * @var string
     */
    private $speciesNamespace = '\Zoo\Animal\Species\\';

    /**
     * @param string $class
     * @param array  $arguments
     *
     * @return AbstractAnimal
     * @throws \Exception
     */
    public function get(string $class, $arguments = array()): AbstractAnimal
    {
        if (empty($class)) {
            throw new \InvalidArgumentException();
        }

        $fullyQualifiedClassName = $this->speciesNamespace.ucfirst($class);
        $reflection = new \ReflectionClass($fullyQualifiedClassName);
        $abstractReflection = new \ReflectionClass('Zoo\Animal\AbstractAnimal');
        if (class_exists($fullyQualifiedClassName) && $reflection->isSubclassOf($abstractReflection)) {
            /** @var AbstractAnimal $animal */
            $animal = $reflection->newInstanceArgs($arguments);

            return $animal;
        }

        throw new \Exception(sprintf('There is no %s in the Zoo', ucfirst($class)));
    }
}
