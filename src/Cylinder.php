<?php
namespace TW\oop;
class Cylinder extends A_Figure
{
    private $Radius;

    public function __construct(int $height, int $radius)
    {
        $this->Height = $height;
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
        return $this->Radius**2 * M_PI * $this->Height;
    }

    public function getSurfaceArea(): int
    {
        return 2 * M_PI * $this->Radius * ($this->Radius * $this->Height);
    }
}