<?php
require_once('FlatDecorator.php');

class RichApartments extends FlatDecorator
{

    public function furniture(): string
    {
        return $this->flat->furniture() + 'jacuzzi';
    }

    public function price(): int
    {
       return $this->flat->price() * 7;
    }
}