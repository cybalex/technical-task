<?php

namespace Zoo\Exception;

/**
 * Class InvalidBehaviourException
 */
class InvalidBehaviourException extends \LogicException
{
    /**
     * InvalidBehaviourException constructor
     */
    public function __construct()
    {
        $species = (new \ReflectionClass($this->getTrace()[0]['class']))->getShortName();
        $this->message = ucfirst($species).' cannot '.$this->getTrace()[0]['function'];
    }
}
