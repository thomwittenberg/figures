<?php
class Cube extends Rprism
{
    public function __construct(int $length)
    {
        parent::__construct($length, $length, $length);
    }
}