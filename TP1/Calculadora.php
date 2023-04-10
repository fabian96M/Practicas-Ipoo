<?php 
class Calculadora{
//Atributos
private $num1;
private $num2;
//metodo constructor
function __construct($numero1, $numero2){
$this->num1= $numero1;
$this->num2= $numero2;
} 
//metodos de acceso
//Medodos setters
public function setNum1($nNum1){
$this->num1= $nNum1;
}
public function setNum2($nNum2){
$this->num2=$nNum2;
}
//Metodos Getters
public function getNum1(){
return $this->num1;
}
public function getNum2(){
return $this->num2;
}
//metodo Suma
public function suma(){
    return $this->num1 + $this->num2;
}
//metodo Resta
public function resta(){
    return $this->num1 - $this->num2;
}
//metodo multiplicacion
public function multiplicacion(){
    return $this->num1 * $this->num2;
}
//metodo division
public function division(){
    return $this->num1/$this->num2;
}
}