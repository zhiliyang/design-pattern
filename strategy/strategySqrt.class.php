<?php
namespace strategy;

class strategySqrt implements strategy {

    public function money($money)
    {
        return $money * $money;
    }
}
