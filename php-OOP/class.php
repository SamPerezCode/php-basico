<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
class Saiyayin
{
    // modificador de acceso: public o private
    // public $nombre = "Sam";
    // Le podemos definir un tipado a la variable;
    public string $nombre = "Goku";
    public int $nivel_pelea = 1000;

    // metodo: podemos decirle que tipo de datos tiene que devolver con ":" despues del parentesis
    // public function Saludar():string {
    //     return "Hola soy " . $this->nombre;
    // }
    public function Saludar()
    {
        return "Hola soy " . $this->nombre;
    }

    public function NivelDePelea()
    {
        return $this->nombre . "Tiene un nivel de pelea de " . $this->nivel_pelea;
    }
}

// crear un objeto apartir de la clase o hacer una instancia de esta clase

// $goku = new Saiyayin();

// var_dump($goku);
// Acceder a metodos o atributos
echo $goku->nombre . "<br>";
echo $goku->Saludar();
