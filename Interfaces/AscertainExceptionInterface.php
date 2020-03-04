<?php

namespace nlib\Ascertain\Interfaces;

interface AscertainExceptionInterface {

    /**
     *
     * @return array
     */
    public function getExceptions() : array;

    /**
     *
     * @param array $exceptions
     * @return self
     */
    public function setExceptions(array $exceptions);
}