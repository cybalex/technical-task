<?php

namespace Zoo\Animal\Action;

/**
 * Interface EatInterface
 */
interface EatInterface
{
    /**
     * @param string $food
     *
     * @return string
     */
    public function eat(string $food): string;
}
