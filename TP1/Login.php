<?php
//SIN TERMINAR
/**Implementar una clase Login que almacene el nombreUsuario, contraseña, frase que permite
recordar la contraseña ingresada y las ultimas 4 contraseñas utilizadas. Implementar un método que permita validar una contraseña con la almacenada y un método para cambiar la contraseña actual por otra nueva, el sistema deja cambiar la contraseña siempre y cuando esta no haya sido usada recientemente (es decir no se encuentra dentro de las cuatro almacenadas). Implementar el método recordar que dado el usuario, muestra la frase que permite recordar su contraseña. */
class Login{
//atributos
private $nombreUsuario;
private $contraseña;
private $frase;
private $ultimasContraseñas;
//constructor
public function __construct($nombre, $contraseña, $frase)
{
    $this->nombreUsuario = $nombre;
    $this->contraseña = $contraseña;
    $this->frase = $frase;
    $this->ultimasContraseñas = array($contraseña);
}
//metodos setters y getters
public function getNombreUsuario(){
return $this->nombreUsuario;
}
public function getContraseña(){
return $this->contraseña;
}
public function getFrase(){
return $this->frase;
}
public function getUltimasContraseñas(){
    
}
public function setNombreUsuario($nombre){
$this->nombreUsuario = $nombre;
}
public function setContraseña($contraseña){
$this->contraseña = $contraseña;
}
public function setFrase($frase){
$this->frase = $frase;
}
//metodo validador
public function validarContraseña(){

}
//metodo cambiarContraseña
public function cambiarContraseña(){

}
//metodo verificarContraseñaReciente
public function verificarContraseñaReciente(){

}
}