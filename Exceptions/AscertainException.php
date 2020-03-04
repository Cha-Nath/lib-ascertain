<?php

namespace nlib\Ascertain\Exceptions;

use Exception;

class AscertainException extends Exception {

    private $_exceptions;

    public function __construct(array $exceptions) { $this->setExceptions($exceptions); }

    public function getExceptions() : array { return $this->_exceptions; }

    public function setExceptions(array $exceptions) : self { $this->_exceptions = $exceptions; return $this; }
}