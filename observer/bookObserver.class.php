<?php
namespace observer;

class bookObserver implements observer
{
    public function __construct(subject $subject)
    {
        $subject->register($this);
    }

    public function modify($data)
    {
        print("i'm book observer, this value is " . json_encode($data) . PHP_EOL);
    }
}
