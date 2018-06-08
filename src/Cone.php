<?php

namespace TW\oop;
class Cone extends A_Figure
{
    private $Radius;

    public function __construct(int $height,int $radius)
    {
        $this->Height = $height;
        $this->Radius = $radius;
    }

    public function __debugInfo()
    {
        return[$this->getSurfaceArea()];
    }

    public function setRadius(int $Radius): void
    {
        $this->Radius = $Radius;
    }

    public function getRadius(): int
    {
        return $this->Radius;
    }

    public function getVolume(): int
    {
        return 1/3 * M_PI * $this->Radius**2 * $this->Height;
    }

    public function getSurfaceArea(): int
    {
        return M_PI * $this->Radius**2 + M_PI * $this->Radius * sqrt($this->Radius**2 + $this->Height**2);
    }
}
