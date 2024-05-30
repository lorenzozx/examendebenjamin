<?php
class Empleado {
    public $codigo;
    public $apellidos;
    public $nombres;
    public $DNI;
    const AFP = 0.11;

    public function mostrarInformacion() {
        echo "Código: " . $this->codigo . "<br>";
        echo "Apellidos: " . $this->apellidos . "<br>";
        echo "Nombres: " . $this->nombres . "<br>";
        echo "DNI: " . $this->DNI . "<br>";
        echo "AFP: " . self::AFP . "<br>";
    }
}

$empleado = new Empleado();
$empleado->codigo = 12345;
$empleado->apellidos = "González";
$empleado->nombres = "María";
$empleado->DNI = "12345678";

$empleado->mostrarInformacion();
?>