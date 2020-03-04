<?php

namespace nlib\Ascertain\Traits;

use nlib\Tool\Traits\ArrayTrait;

trait MissingTrait {

    use ArrayTrait;

    private $_missings = [];

    public function is_missings(array $keys, array $array, bool $onkey = true) : bool {

        $method = $this->array_search_method($onkey);
        foreach($keys as $key)
            if(!$method($key, $array)) $this->addMissing($key);

        return !empty($this->getMissings());
    }

    public function is_missing(string $key, array $array, bool $onkey = true) : bool {

        $method = $this->array_search_method($onkey);
        if(!$method($key, $array)) $this->addMissing($key);

        return !empty($this->getMissings());
    }

    public function getMissings() : array { return $this->_missings; }

    public function addMissing(string $missing) : self { $this->_missings[] = $missing; return $this; }
    public function setMissings(array $missings) : self { $this->_missings = $missings; return $this; }
}