<?php
include_once ("Point.php");

class MovablePoint extends Point
{
    public $x;
    public $y;
    public $xSpeed;
    public $ySpeed;
    public function __construct($x, $y,$xSpeed,$ySpeed)
    {
        $this->x=$x;
        $this->y=$y;
        $this->xSpeed=$xSpeed;
        $this->ySpeed=$ySpeed;
    }

    /**
     * @return mixed
     */
    public function getXSpeed()
    {
        return $this->xSpeed;
    }

    /**
     * @return mixed
     */
    public function getYSpeed()
    {
        return $this->ySpeed;
    }

    /**
     * @param mixed $xSpeed
     */
    public function setXSpeed($xSpeed)
    {
        $this->xSpeed = $xSpeed;
    }

    /**
     * @param mixed $ySpeed
     */
    public function setYSpeed($ySpeed)
    {
        $this->ySpeed = $ySpeed;
    }
    public function setSpeed($xSpeed,$ySpeed){
        $this->xSpeed=$xSpeed;
        $this->ySpeed=$ySpeed;
    }
    public function getSpeed(){
        return $this->xSpeed.$this->ySpeed;
    }
    public function toString()
    {
        echo $this->x.$this->y."speed=".$this->xSpeed.$this->ySpeed;
    }
    public function move(){
        $this->x+=$this->xSpeed;
        $this->y+=$this->ySpeed;
    }

}