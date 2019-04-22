<?php

class Lock {

    // Future use.. Unclear tutorial
    protected $isLocked;

    public function lock(){
        $this->isLocked = true;
    }

    /**
     * @return bool
     */
    public function isLocked()
    {
        return $this->isLocked;
    }

}