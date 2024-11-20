<?php
include_once("wordix.php");



/**************************************/
/***** DATOS DE LOS INTEGRANTES *******/
/**************************************/

/* Apellido, Nombre. Legajo. Carrera. mail. Usuario Github */
/* ****COMPLETAR***** */


/**************************************/
/***** DEFINICION DE FUNCIONES ********/
/**************************************/

/**
 * Obtiene una colección de palabras
 * @return array
 */
function cargarColeccionPalabras()
{
    $coleccionPalabras = [
        "MESSI", "QUESO", "FUEGO", "CASAS", "RASGO",
        "GATOS", "GOTAS", "HUEVO", "TINTO", "NAVES",
        "VERDE", "MELON", "YUYOS", "PIANO", "PISOS",
        "NIEVE", "PAROS", "CINCO", "CAJON", "SILLA",
    ];

    return ($coleccionPalabras);
}

/* ****COMPLETAR***** */

/**
 * FUNCION 2: Una función llamada cargarPartidas, que inicializa una estructura de datos con ejemplos de Partidas
 *  y retorna la colección de partidas.
 * @return array
 */

 function cargarPartidas(){
    $coleccionPartidas =[["palabraWordix" => "QUESO", "jugador" => "majo", "intentos" => 7, "puntaje" => 0],
                         ["palabraWordix" => "CINCO", "jugador" => "pepe", "intentos" => 1, "puntaje" => 15],
                         ["palabraWordix" => "CAJON", "jugador" => "santi", "intentos" => 3, "puntaje" => 13],
                         ["palabraWordix" => "SILLA", "jugador" => "gaston", "intentos" => 4, "puntaje" => 12],
                         ["palabraWordix" => "FUEGO", "jugador" => "ely", "intentos" => 2, "puntaje" => 12],
                         ["palabraWordix" => "HUEVO", "jugador" => "lucas", "intentos" => 8, "puntaje" => 0],
                         ["palabraWordix" => "NAVES", "jugador" => "fabri", "intentos" => 1, "puntaje" => 16],
                         ["palabraWordix" => "NIEVE", "jugador" => "pepe", "intentos" => 5, "puntaje" => 11],
                         ["palabraWordix" => "MELON", "jugador" => "ely", "intentos" => 6, "puntaje" => 10],
                         ["palabraWordix" => "PIANO", "jugador" => "julian", "intentos" => 3, "puntaje" => 13],
                         ["palabraWordix" => "VERDE", "jugador" => "duki", "intentos" => 10, "puntaje" => 0],
                         ["palabraWordix" => "MESSI", "jugador" => "tussy", "intentos" => 1, "puntaje" => 16],
];
return $coleccionPartidas;
 }

 /**
  * FUNCION 3: una función que muestre las opciones del menú en la pantalla ,
  * le solicita al usuario una opción válida (si la opción no es válida vuelva a solicitarla en la misma función hasta que la opción sea válida)
  * y retorna el número de la opción.
  *@return INT
  */

function seleccionarOpcion(){

}

 /**
  * FUNCION 4 (REUTILIZADA DE WORDIX.PHP): Una función que le pide al usuario ingresar una palabra de 5 letras, y retorna la palabra.
  *
  */
$palabra = leerPalabra5Letras();

/**
 * FUNCION 5 (REUTILIZADA DE WORDIX.PHP): Una función que solicita al usuario un número entre un rango de valores.
 *  Si el número ingresado por el usuario no es válido, la función se encarga de volver a pedirlo. La función retorna un número válido.
 * @return INT
 */

function numeroValido(){
   $cantidadPartidas = cargarPartidas();
   $elementos = count($cantidadPartidas);
//    return solicitarNumeroEntre(1, );

}
/**************************************/
/*********** PROGRAMA PRINCIPAL *******/
/**************************************/

//Declaración de variables:


//Inicialización de variables:
$palabras = cargarColeccionPalabras();
$partidas = cargarPartidas();

//Proceso:

//$partida = jugarWordix("MELON", strtolower("MaJo"));
//print_r($partida);
//imprimirResultado($partida);




do {
    $opcion = "";

    
    switch ($opcion) {
        case 1: 
            //completar qué secuencia de pasos ejecutar si el usuario elige la opción 1

            break;
        case 2: 
            //completar qué secuencia de pasos ejecutar si el usuario elige la opción 2

            break;
        case 3: 
            //completar qué secuencia de pasos ejecutar si el usuario elige la opción 3

            break;
        
            //...
    }
} while ($opcion != "");

