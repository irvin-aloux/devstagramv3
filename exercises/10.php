<?php
include 'includes/header.php';

class Persona
{
  protected static $nombre;
  protected $apellido;
  protected $email;
  protected $telefono;

  public function __construct($nombre, $apellido, $email, $telefono)
  {
    self::$nombre = $nombre;
    $this->apellido = $apellido;
    $this->email = $email;
    $this->telefono = $telefono;
  }

  public function mostrarInformacion()
  {
    echo "Nombre: " . $this->nombre . " " . "Apellido: " . $this->apellido . " " . "Email: " . $this->email;
  }

  public function mostrarTelefono ()
  {
    echo "Telefono: " . $this->telefono;
  }

}

class Empleado extends Persona
{
  protected $codigo;
  protected $departamento;

  public function __construct($nombre, $apellido, $email, $telefono, $codigo, $departamento)
  {

    parent:: __construct($nombre, $apellido, $email, $telefono, $codigo, $departamento);
    $this->codigo = $codigo;
    $this->departamento = $departamento;
  }

  //Los metodos estaticos son aquellos que no requiren una instancia
  public static function obtenerEmpleado(){
    echo "Desde metodo estatico";
  }

}

$empleado = new Empleado("Juan", "Wolford", "Juan@gmail.com", "2229292929", "2222", "1500");

echo "<pre>";
var_dump($empleado);
echo "</pre><br>";

// $empleado->mostrarInformacion();
// echo "<br>";
// $empleado->mostrarTelefono();



// Empleado::obtenerEmpleado();