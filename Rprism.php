<?php
class Rprism extends A_Figure
{
    private $Length;
    private $Width;

    public function __construct(int $length, int $width, int $height)
    {
        $this->Length = $length;
        $this->Width = $width;
        $this->Height = $height;
    }

    public function setLength(int $length): void
    {
        $this->Length = $length;
    }

    public function getLength(): int
    {
        return $this->Length;
    }

    public function setWidth(int $width): void
    {
        $this->Width = $width;
    }

    public function getWidth(): int
    {
        return $this->Width;
    }

    public function getVolume(): int
    {
        return $this->Length * $this->Width * $this->Height;
    }

    public function getSurfaceArea(): int
    {
        return 2*($this->Length + $this->Width + $this->Height);
    }
}