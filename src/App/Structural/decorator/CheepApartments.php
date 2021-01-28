<?php
require_once('Flat.php');

class CheepApartments implements Flat
{

    public function furniture(): string
    {
       return 'chair';
    }

    public function price(): int
    {
        return 100;
    }
}