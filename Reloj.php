<?php

class Reloj{
    //atributos
private $hora;
private $minutos;
private $segundos;

//metodo constructor
function __construct($h,$min,$seg)
{
    $this->hora = $h;
    $this->minutos = $min;
    $this->segundos = $seg;
}
//metodos setters
public function setHora($horaN){
$this->hora = $horaN;
}
public function setMinutos($min){
    $this->minutos= $min;
}
public function setSegundos($segs){
    $this->segundos = $segs;
}

//Metodos Getters
public function getHora(){
    return $this->hora;
}
public function getMinutos(){
    return $this->minutos;
}
public function getSegundos(){
    return $this->segundos;
}
//metodo toString
public function __toString()
{
    return "". $this->getHora()." horas ".$this->getMinutos() ." minutos ". $this->getSegundos()." segundos";
    
}  
//metodo puesta a cero
public function puestaCero(){
$this->setHora(0);
$this->setMinutos(0);
$this->setSegundos(0);
}
//metodo incremento

public function incremento(){
    //verificamos si algun numero esta en el rango borde
    if($this->getHora()==23 || $this->getMinutos()==59 || $this->getSegundos()==59){
 //verifica si se salta a minutos
 if($this->getHora()<23 && $this->getMinutos()<59){
    
 }
     //Verifica si se salta a horas
    //Verifica si se setea a cero
    }
   else{
//si no se incrementa normalmente

   }
    
}
}