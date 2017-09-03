<?php

namespace Zoo\Animal\Action;

/**
 * Interface AttackInterface
 */
interface AttackInterface
{
    /**
     * @param string|object $victim
     *
     * @return string
     */
    public function byte($victim): string;
}
