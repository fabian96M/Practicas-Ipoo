<?php
class Fecha {
    //atributos
    private $dia;
    private $mes;
    private $anio;
    //constructor
    public function __construct($dia, $mes, $anio) {
        $this->dia = $dia;
        $this->mes = $mes;
        $this->anio = $anio;
    }
    //metodos getters
    public function getDia() {
        return $this->dia;
    }
    public function getMes() {
        return $this->mes;
    }
    public function getAño() {
        return $this->anio;
    }
    //metodos setters
    public function setDia($dia) {
        $this->dia = $dia;
    }
    public function setMes($mes) {
        $this->mes = $mes;
    }
    public function setAño($anio) {
        $this->anio = $anio;
    }
    //metodo de fecha abreviada
    public function fechaAbreviada() {
        return $this->dia . "/" . $this->mes . "/" . $this->anio;
    }
    //metodo fechaExtendida
    public function fechaExtendida() {
        $fechas = array("enero ", " febrero ", " marzo ", " abril ", " mayo ", " junio ", " julio ", " agosto ", " septiembre ", " octubre ", " noviembre ", " diciembre ");
        return $this->dia . " de " . $fechas[$this->mes - 1] . " de " . $this->anio;
    }
    //metodo de incrementar un dia
    public function incrementaDia() {
        $this->dia++;
        $tamañoMes = $this->diasDelMes();
        if($this->dia > $tamañoMes){
        $this->dia = 1;
        $this->mes++;
        if($this->mes > 12){
            $this->mes = 1;
            $this->anio++;
        }
        }
    }
    //la funcion dias del mes detecta en base al mes y al año que dias le corresponden al mes 
    public function diasDelMes() {

        if ($this->mes == 2) {
            //verifica si el mes es igual a febrero
            if (($this->anio % 4 == 0 && $this->anio % 100 != 0) || $this->anio % 400 == 0) {


                //se verifica que el año sea bisciesto (es múltiplo de 4 pero no de 100, o es múltiplo de 400)
                $diasMes = 29;
            } else {
                $diasMes = 28;
            }
        } elseif ($this->mes == 4 || $this->mes == 6 || $this->mes == 9 || $this->mes == 11) {
            // Si el mes es abril (mes número 4), junio (mes número 6), septiembre (mes número 9) o noviembre (mes número 11)
            $diasMes = 30;
        } else {
            //en cualquier otro caso (meses restantes)
            $diasMes = 31;
        }
        return $diasMes;
    }
    public function incremento($cantDias){
    $nuevaFecha= new Fecha($this->dia, $this->mes, $this->anio);
    for($i=0;$i<=$cantDias;$i++){
        //la variable $i va a ir iterando hasta alcanzar la cantidad de dias estipulados por parametro y en cada iteracion se incrementara un dia con la funcion incrementadia
        $nuevaFecha->incrementaDia();
    }
    return $nuevaFecha;
    }
    
    /**Diseñar e implementar la clase Fecha. La clase deberá disponer de los atributos mínimos y
necesarios para almacenar el día, el mes y el año, además de métodos que devuelvan un String con la
fecha en forma abreviada (16/02/2000) y extendida (16 de febrero de 2000) . Implementar una función
incremento, que reciba como parámetros un entero y una fecha, que retorne una nueva fecha, resultado
de incrementar la fecha recibida por parámetro en el numero de días definido por el parámetro entero.
Nota 1: Son años bisiestos los múltiplos de cuatro que no lo son de cien, salvo que lo sean de
cuatrocientos, en cuyo caso si son bisiestos.
Nota 2: Para la solución de este problema puede ser útil definir un método incrementa_un_dia. */
}
