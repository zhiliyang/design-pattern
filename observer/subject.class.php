<?php
namespace observer;

interface subject {
    
    public function register(observer $ob);

    public function remove(observer $ob);

    public function modify($data);

    public function getObservers();
}