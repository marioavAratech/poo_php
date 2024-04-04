<?php
require_once "vehiculo.php";
require_once "Coche.php";
require_once "moto.php";


$coche1 = new Coche("Opel", "Rojo", 105000, 4);
$moto1 = new Moto("Yamaha", "Negro", 65000, 125);
$coche2 = new Coche("Audi", "Blanco", 150000, 4);
echo "Datos coche1: Marca: " . $coche1->marca. " Color: " . $coche1->color . " Kilometros: " . $coche1->kilometros."\n\n";
$coche1->kilometros = 110000 ;

echo "Datos coche1: Marca: " . $coche1->marca . " Color: " . $coche1->color . " Kilometros: " . $coche1->kilometros. " Num puertas: ".$coche1->numPuertas. "\n";
echo "Numero de instancias de Vehiculo: ".Vehiculo::getTotalVehiculos();
?>