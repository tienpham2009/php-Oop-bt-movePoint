<?php

namespace movePoint;

class MoveAblePoint extends Point
{
    protected float $xSpeed;
    protected float $ySpeed;

    public function __construct(float $x,
                                float $y,
                                float $xSpeed,
                                float $ySpeed)
    {
        parent::__construct($x, $y);
        $this->xSpeed = $xSpeed;
        $this->ySpeed = $ySpeed;
    }

    /**
     * @return float
     */
    public function getXSpeed(): float
    {
        return $this->xSpeed;
    }

    /**
     * @return float
     */
    public function getYSpeed(): float
    {
        return $this->ySpeed;
    }

    /**
     * @param float $ySpeed
     */
    public function setYSpeed(float $ySpeed): void
    {
        $this->ySpeed = $ySpeed;
    }

    /**
     * @param float $xSpeed
     */
    public function setXSpeed(float $xSpeed): void
    {
        $this->xSpeed = $xSpeed;
    }

    public function getSpeed(): array{
        return [$this->xSpeed,$this->ySpeed];
    }

    public function move(): MoveAblePoint{
        echo "Point was moved is : "."<br>".
        "x is :".($this->x = $this->x + $this->xSpeed)."<br>".
        "y is :".($this->y = $this->y + $this->ySpeed);
        return $this;
    }

    public function __toString(): string
    {
        return "x is : ".$this->x."<br>"."y is : ".$this->y;
    }
}