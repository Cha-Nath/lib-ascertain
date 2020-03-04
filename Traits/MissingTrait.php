<?php

namespace nlib\Ascertain\Traits;

trait MissingTrait {

    private $_missings = [];

    public function is_missings(array $keys, array $array, bool $onkey = true) : bool {

       $method = $onkey ? 'array_key_exists' : 'in_array';
        foreach($keys as $key)
            if(!$method($key, $array)) $this->addMissing($key);

        return !empty($this->getMissings());
    }

    public function is_missing(string $key, array $array, bool $onkey = true) : bool {

       $method = $onkey ? 'array_key_exists' : 'in_array';
        if(!$method($key, $array)) $this->addMissing($key);

        return !empty($this->getMissings());
    }

    public function getMissings() : array { return $this->_missings; }

    public function addMissing(string $missing) : self { $this->_missings[] = $missing; return $this; }
    public function setMissings(array $missings) : self { $this->_missings = $missings; return $this; }
}