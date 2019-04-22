<?php

class Chest {

    // Future use.. Unclear tutorial
    protected $lock;
    protected $isClosed;

    public function __construct($lock)
    {
        $this->lock = $lock;
    }

    public function close($lock) {
       if ($lock === true){
           $this->lock->lock();
       }

       $this->isClosed = true;
    }

    /**
     * @return mixed
     */
    public function getisClosed()
    {
        return $this->isClosed;
    }

}