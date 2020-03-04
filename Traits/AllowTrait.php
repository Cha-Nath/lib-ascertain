<?php

namespace nlib\Ascertain\Traits;

use nlib\Tool\Traits\ArrayTrait;

trait AllowTrait {

    use ArrayTrait;
    
    private $_badattempts = [];

    public function is_authorized(string $key, array $array, bool $onkey = true) : bool {
        
        $method = $this->array_search_method($onkey);
        if(!$method($key, $array)) $this->addBadAttempts($key);

        return !empty($this->getBadAttempts());
    }
    
    public function getBadAttempts() : array { return $this->_badattempts; }

    public function addBadAttempts(string $badattempt) : self { $this->_badattempts[] = $badattempt; return $this; }
    public function setBadAttempts(array $badattempts) : self { $this->_badattempts = $badattempts; return $this; }
    
}