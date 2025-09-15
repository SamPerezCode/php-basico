<?php
// Mostrar todos los errores
error_reporting(E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

class Saiyayin
{
    // public string $nombre;
    // public int $nivel_pelea;

    // Como agregar el metodo constructor 
    // public function __construct($nombre, $nivel)
    // {
    //     $this->nombre = $nombre;
    //     $this->nivel_pelea = $nivel;
    // }

    public string $clase = "Saiyayin";
    // CONSTRUCTOR PROPERTY PROMOTION: este metodo de php 8 nos sirve para hacer mas corto el construcotr, ya no definiriamos las variables fuera del constructor, lo podemo shacer en el parectesis como parametros, se puede usar d ela forma clasica tambien, depende de los gustos

    public function __construct(public string $nombre, public int $nivel_pelea)
    {
        // $this->nombre = $nombre;
        // $this->nivel_pelea = $nivel_pelea;
    }

    public function Saludar()
    {
        return "Hola soy " . $this->nombre;
    }

    public function NivelDePelea()
    {
        return $this->nombre . " tiene un nivel de pelea de " . $this->nivel_pelea . " y pertenece a la clase " . $this->clase;
    }
}

// $goku = new Saiyayin("Goku", 1000);

// echo $goku->nombre;
// echo "<br>";
// echo $goku->NivelDePelea();


// ------------------------------------------------
// HERENCIA
class SuperSaiyayin extends Saiyayin
{
    public string $clase = "Super Saiyayin";

    public function transformacion()
    {
        if ($this->nivel_pelea >= 1500) {
            $texto = $this->nombre . " Se tranformó en " . $this->clase;
        } else {
            $texto = $this->nombre . " No se transformó en " . $this->clase;
        }

        return $texto;
    }
}

$goku = new Saiyayin(nivel_pelea: 1000, nombre: "Goku");

echo "<br>";
echo $goku->NivelDePelea();
echo "<br>";
// echo $goku->nombre;

// objeto con la nueva instancia con herencia

$gohan = new SuperSaiyayin(nivel_pelea: 1700, nombre: "Gohan");
echo $gohan->NivelDePelea();
echo "<br>";
echo $gohan->transformacion();
