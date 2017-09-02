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
     * @return mixed
     */
    public function attack($victim);
}
