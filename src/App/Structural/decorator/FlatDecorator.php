<?php


abstract class FlatDecorator implements Flat
{
    protected $flat;

    public function __construct(Flat $flat)
    {
        $this->flat = $flat;
    }
}