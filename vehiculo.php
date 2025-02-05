<?php 
 /**
  * Summary of Vehiculo
  */
 class Vehiculo{


    private string $marca;
    private string $color;
    private int $kilometros;
    public static int $totalVehiculos = 0;


    public function __construct(string $marca, string $color,int $kilometros){
        $this->marca = $marca;
        $this->color = $color;
        $this->kilometros = $kilometros;
        self::$totalVehiculos++;
    }

    //Getters
    /**
     * Summary of getMarca
     * @return string
     */


     /*
    public function getMarca(): string
    {
        return $this->marca;
    }

    
    public function getColor(): string
    {
        return $this->color;
    }
    public function getKilometros(): int
    {
        return $this->kilometros;
    }

    //Setters

    public function setMarca(string $marca): void
    {
        $this->marca = $marca;
    }

    public function setColor(string $color): void
    {
        $this->color = $color;
    }

    public function setKilometros (int $kilometros): void
    {
        $this->kilometros = $kilometros;
    }
  */
//$propiedad = "color";
    public function __get($propiedad): mixed
    {
        if(property_exists($this,$propiedad)){
            return $this->$propiedad; //$this->color
        }else{
            return null;
        }
    }

    public function __set($propiedad,$valor): void
    {
        if(property_exists($this,$propiedad)){
            $this->$propiedad = $valor;
        }
    }


    public static function getTotalVehiculos(): int
    {
        return self::$totalVehiculos;
    }
  

 }


?>