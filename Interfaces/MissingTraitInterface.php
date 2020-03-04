<?php

namespace nlib\Ascertain\Interfaces;

interface MissingTraitInterface {
    
    /**
     *
     * @param array $keys
     * @param array $array
     * @return boolean
     */
    public function is_missing(array $keys, array $array) : bool;

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