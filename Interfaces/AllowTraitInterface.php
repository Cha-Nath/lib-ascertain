<?php

namespace nlib\Ascertain\Interfaces;

interface AllowTraitInterface {

    /**
     *
     * @param string $key
     * @param array $array
     * @param boolean $onkey
     * @return boolean
     */
    public function is_authorized(string $key, array $array, bool $onkey = true) : bool;
    
    /**
     *
     * @return array
     */
    public function getBadAttempts() : array;

    /**
     *
     * @param string $badattempt
     * @return self
     */
    public function addBadAttempts(string $badattempt);

    /**
     *
     * @param array $badattempts
     * @return self
     */
    public function setBadAttempts(array $badattempts);
}