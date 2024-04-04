<?php

class Moto extends Vehiculo
{

    protected int $cilindrada;
   

    public function __construct(string $marca,string $color,int $kilometros, int $cilindrada)
    {
        parent::__construct($marca, $color, $kilometros);
        $this->cilindrada = $cilindrada;
    }

    /*
    public function getCilindrada(): int
    {
        return $this->cilindrada;
    }

    public function setCilindrada(int $cilindrada): void
    {
        $this->cilindrada = $cilindrada;
    }
    */
}
