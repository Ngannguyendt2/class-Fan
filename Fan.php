<?php


class Fan
{
    protected $slow = 1;
    protected $medium = 2;
    protected $fast = 3;
    private $speed = 1;
    private $on = false;
    private $radius = 5;
    private $color = 'blue';

    function getSpeed()
    {
        return $this->speed;
    }

    function setSpeed($speed)
    {
        $this->speed = $speed;
    }

    function getIsON()
    {
        return $this->on;
    }

    function setIsON($on)
    {
        $this->on = $on;
    }

    function getRadius()
    {
        return $this->radius;
    }

    function setRadius($radius)
    {
        $this->radius = $radius;
    }

    function getColor()
    {
        return $this->color;
    }

    function setColor($color)
    {
        $this->color = $color;
    }
    function toString(){
        if($this->getIsON()){
            return $this->getSpeed().$this->getColor().$this->getRadius()."fan is on";
        }
        else{
            return $this->getSpeed().$this->getColor().$this->getRadius()."fan is off";
        }
    }
}