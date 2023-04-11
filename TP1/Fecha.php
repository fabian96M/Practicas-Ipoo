<?php 
class Fecha{
    //atributos
    private $dia;
    private $mes;
    private $anio;
    //constructor
    public function __construct($dia, $mes, $anio)
    {
        $this->dia = $dia;
        $this->mes = $mes;
        $this->anio = $anio;
    }
    //metodos getters
    public function getDia(){
        return $this->dia;
    }
    public function getMes(){
        return $this->mes;
    }
    public function getAño(){
        return $this->anio;
    }
    //metodos setters
    public function setDia($dia){
        $this->dia = $dia;
    }
    public function setMes($mes){
        $this->mes = $mes;
    }
    public function setAño($anio){
        $this->anio = $anio;
    }
    //metodo de fecha abreviada
    public function fechaAbreviada(){
        return $this->dia."/".$this->mes."/".$this->anio;
    }
    //metodo fechaExtendida
    public function fechaExtendida(){
        $fechas=array(' enero ',' febrero ',' marzo ',' abril ', ' mayo ', ' junio ', ' julio ', ' agosto ', ' septiembre ', ' octubre ', ' noviembre ', ' diciembre ')
        return $this->;
    }
    //metodo de incrementar un dia
    //metodo de incremento
    //metodo para saber si un año es bisiesto
    //


}