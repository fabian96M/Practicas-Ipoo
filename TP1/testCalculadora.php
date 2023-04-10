<?php
//incluimos la clase calculadora
include_once("Calculadora.php");
//instanciamos un par de objetos
$calc1 = new Calculadora(10, 5);
$calc2 = new Calculadora(20, 8);
$bandera = true;
$result = 0;
//proporcionamos un menu para seleccionar las opciones
while ($bandera) {
    mostrarMenu();
    //recibimos el numero de la opcion
    $opcion = trim(fgets(STDIN));

    if ($opcion < 5 && $opcion >= 0) {
        //solicitamos los numeros
        echo "\n por favor ingrese los dos numeros para la operacion \n";
        $num1 = trim(fgets(STDIN));
        $num2 = trim(fgets(STDIN));
        //la operacion no es posible si se intenta dividir por cero
        if ($num2 == 0 && $opcion == 4) {
            echo "\n No puede dividirse por cero\n";
            $bandera = false;
        }
        //ingresamos un modulo para para recibir las opciones del menu y ejecutar la operacion, si ambos numeros son cero o la opcion es 5 no se ejecuta el modulo
        $result = ejecutorDeOperacion($opcion, $num1, $num2);
        $bandera = false;
    } else{
        //si la opcion es 5 o distinta a las mencionadas no se ejecuta la solicitud
        $bandera = false;
    }
}
// se muestra el resultado final
echo "\n " . $result . " Es el resultado final de la operacion\n";

//creamos una funcion que reciba los valores e instancie un objeto calculadora
function instanciarCalculo($num1, $num2) {
    //recibe por parametro dos valores enteros y retorna un objeto calculadora con los dos valores cargados como atributos
    $calculo = new Calculadora($num1, $num2);
    return $calculo;
}
function ejecutorDeOperacion($opcion, $num1, $num2) {
    //recibe por parametro los numeros de la operacion y el numero de opcion y retorna el resultado de la operacion
    $calc = new Calculadora($num1, $num2);
    switch ($opcion) {
        case "1":
            //suma
            $resultado = $calc->suma();
            break;
        case "2":
            //resta
            $resultado = $calc->resta();
            break;
        case "3":
            //multiplicacion
            $resultado = $calc->multiplicacion();
            break;
        case "4":
            //Division
            $resultado = $calc->division();
            break;
    }
    return $resultado;
}
// modulo para mostrar el menu
function mostrarMenu() {
    echo " \n A continuacion ingrese la opcion deseada para la operacion \n
1) Para ingresar una suma \n
2) Para realizar una resta \n
3) Para realizar una multiplicacion \n
4) Para realizar una division \n
5) Para finalizar la operacion \n";
}
