<?php
class Pyramid extends A_Figure
{
    private $Base;

    public function __construct(int $height,int $base)
    {
        $this->Height = $height;
        $this->Base = $base;
    }

    public function setBase(int $Base): void
    {
        $this->Base = $Base;
    }

    public function getBase(): int
    {
        return $this->Base;
    }

    public function getVolume(): int
    {
        return 1/3 * $this->Base**2 * $this->Height;
    }

    public function getSurfaceArea(): int
    {
        return $this->Base**2 + 4 * sqrt(($this->Base/2)**2 + $this->Height**2);
    }
}