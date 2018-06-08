<?php
namespace TW\oop;
class Sphere implements Figure
{
    private $Radius;

    public function __construct(int $radius)
    {
        $this->Radius = $radius;
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
        return 4/3 * M_PI * $this->Radius**3;
    }

    public function getSurfaceArea(): int
    {
        return 4 * M_PI * $this->Radius**2;
    }
}