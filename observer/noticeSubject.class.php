<?php
namespace observer;

class noticeSubject implements subject 
{
    protected $obs = [];

    public function register(observer $ob) 
    {
        foreach($this->obs as $key => $val) {
            if($ob == $val) {
                return;
            }
        }

        $this->obs[] = $ob;
    }

    public function remove(observer $ob) 
    {
        foreach($this->obs as $key => $val) {
            if($ob == $val) {
                unset($this->obs[$key]);
            }
        }
    }

    public function modify($data)
    {
        foreach($this->obs as $key => $val) {
            $val->modify($data);
        }
    }

    public function getObservers()
    {
        return $this->obs;
    }
}