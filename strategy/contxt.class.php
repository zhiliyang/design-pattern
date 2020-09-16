<?php
namespace strategy;

class contxt {

    public $currentStrategy = null;

    public function __construct()
    {
    }

    public function setStrategy(strategy $strategy)
    {
        $this->$currentStrategy = $strategy;
    }

    public function money($money)
    {
        return $this->$currentStrategy->money($money);
    }
}
