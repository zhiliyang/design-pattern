<?php
namespace observer;

class newsObserver implements observer
{
    public function __construct(subject $subject)
    {
        $subject->register($this);
    }
    
    public function modify($data)
    {
        echo ("i'm news observer, this value is " . json_encode($data) . PHP_EOL);
    }
}
