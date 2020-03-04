<?php

namespace nlib\Ascertain\Interfaces;

interface MissingTraitInterface {
    
    /**
     *
     * @param array $keys
     * @param array $array
     * @param boolean $onkey
     * @return boolean
     */
    public function is_missings(array $keys, array $array, bool $onkey = true) : bool;
 
    /**
     *
     * @param string $key
     * @param array $array
     * @param boolean $onkey
     * @return boolean
     */
    public function is_missing(string $key, array $array, bool $onkey = true) : bool;

    /**
     *
     * @return array
     */    
    public function getMissings() : array;

    /**
     *
     * @param string $missing
     * @return self
     */
    public function addMissing(string $missing);

    /**
     *
     * @param array $missings
     * @return self
     */
    public function setMissings(array $missings);
}