<?php

namespace TW\oop;
abstract class A_Figure implements Figure
{
    protected $Height;

    public function setHeight(int $height): void
    {
        $this->Height=$height;
    }

    public function getHeight()
    {
        return $this->Height;
    }

    public abstract function getVolume(): int;

    public abstract function getSurfaceArea(): int;
}