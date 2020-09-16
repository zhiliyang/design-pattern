<?php
namespace strategy;

class strategyDiscount implements strategy {

    public function money($money)
    {
        return $money * 0.8;
    }
}
