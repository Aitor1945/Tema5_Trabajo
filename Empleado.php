<?php
//Clase
class Empleado{
    //Atributos
    public $nombre;
    public $apellido;
    public $salario_base;

    //Constructor
    public function __construct($nombre,$apellido,$salario_base){
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->salario_base = $salario_base;
    }

    //Metodos
    function calcularSalarioAnual(){
        $salarioAnual = $this->salario_base * 12;
        return "Salario anual de $this->nombre: $salarioAnual";
    }

    function devolverNombreCompleto(){
        return $this->nombre . " " . $this->apellidos;
    }

}

class Gerente extends Empleado{
  //Atributos
    public $bono;

    //Constructor
    public function __construct($nombre,$apellidos,$salario_base){
         parent::__construct($nombre,$apellidos,$salario_base);
         $this->bono = $salario_base * 0.10;
    }
     public function calcularSalarioAnual() {
        $salarioAnual = ($this->salario_base + $this->bono) * 12;
        return "Salario anual de " . $this->devolverNombreCompleto() . "es $salarioAnual €";
    }
    
}

class Vendedor extends Empleado{
    
     //Atributos
    public $comision;

    //Constructor
    public function __construct($nombre,$apellidos,$salario_base){
         parent::__construct($nombre,$apellidos,$salario_base);
         $this->comision = $salario_base * round(0,10) / 100;
    }

    public function calcularSalarioAnual() {
        $salarioAnual = ($this->salario_base + $this->comision) * 12;
        return "Salario anual de" . $this->devolverNombreCompleto() . "es $salarioAnual €";
    }
}

?>