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
    $coleccionPalabras = ["MESSI", "QUESO", "FUEGO", "CASAS", "RASGO",
                          "GATOS", "GOTAS", "HUEVO", "TINTO", "NAVES",
                          "VERDE", "MELON", "YUYOS", "PIANO", "PISOS",
                          "NIEVE", "PAROS", "CINCO", "CAJON", "SILLA",
];
return ($coleccionPalabras);
}

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
    echo"MENU \n\n";
    echo"1- Jugar al wordix con una palabra elegida \n";
    echo"2- Jugar al wordix con una palabra aleatoria \n";
    echo"3- Mostrar una partida \n";
    echo"4- Mostrar la primer partida ganadora \n";
    echo"5- Mostrar resumen de Jugador \n";
    echo"6- Mostrar listado de partidas ordenadas por jugador y por palabra \n";
    echo"7- Agregar una palabra de 5 letras a Wordix \n";
    echo"8- salir \n";
    echo"opcion >>>: ";

    $opcion = solicitarNumeroEntre(1, 8);

    return $opcion;
}

//FUNCION 4 (REUTILIZADA DE WORDIX.PHP)

//FUNCION 5 (REUTILIZADA DE WORDIX.PHP)

/**
 * FUNCION 6 Una función que dado un número de partida, muestra en pantalla los datos de la partida.
 * @param INT $numPartida
 */

function mostrarPartida($numPartida){
    $indice = $numPartida - 1;
    $partidas = cargarPartidas();

    echo" \n *********************************** \n";
    echo"PARTIDA WORDIX " . $numPartida . ": palabra " . $partidas[$indice]["palabraWordix"] . "\n";
    echo"jugador: " . $partidas[$indice]["jugador"] . "\n" ;
    echo"puntaje: " . $partidas[$indice]["puntaje"] . " puntos \n";
    if ($partidas[$indice]["intentos"] > 6) {
        echo"intento: no adivino la palabra \n";
    }
    else {
        echo"intento: adivino la palabra en " . $partidas[$indice]["intentos"] . " intentos \n" ;
    }
    echo"*********************************** \n";
}

/**
 * FUNCION 7: Una función agregarPalabra cuya entrada es la colección de palabras y una palabra, 
 * la función retorna la colección modificada al agregarse la nueva palabra.
 * @param array $arreglo
 * @param STRING $palabra
 * @return array
 */

function agregarPalabra($arreglo, $palabra){
    $arreglo[] = $palabra;
    return $arreglo;
}

/**
 * FUNCION 8: Una función que dada una colección de partidas y el nombre de un jugador, retorna el índice de la primer partida ganada por dicho jugador.
 *  Si el jugador ganó ninguna parda, la función debe retornar el valor -1
 * @param array
 * @param STRING $nombre
 * @return INT
 */

function primerPartidaGanada($arreglo, $nombre){
    $partidas = cargarPartidas();
    $resultado = -1;
    $encontrado = false;
    $elementos = count($partidas);
    $i = 0;

    while (!$encontrado && $i < $elementos) {
        if ($partidas[$i]["jugador"] == $nombre) {
            if ($partidas[$i]["intentos"] < 7 && $partidas[$i]["intentos"] > 0) {
                $resultado = $i;
                $encontrado = true;
            }
        }

        $i++;

    }

    return $resultado;


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
    $menu = seleccionarOpcion();

    $opcion = $menu ;
    
    switch ($opcion) {
        case '1': 
            //completar qué secuencia de pasos ejecutar si el usuario elige la opción 1

        break;
        case '2': 
            //completar qué secuencia de pasos ejecutar si el usuario elige la opción 2

        break;
        case '3': 
            $elementos = count($partidas);
            echo"ingrese un numero de partida para mostrar la misma por pantalla: ";
            $numero = solicitarNumeroEntre(1, $elementos);
           mostrarPartida($numero);
        break;
        case '4': 
            echo"ingrese el nombre del jugador del cual desea visualizar su partida: ";
            $nombre = trim(fgets(STDIN));
            $indicePartidaGanadora = primerPartidaGanada($partidas , $nombre);
            if ($indicePartidaGanadora == -1) {
                echo"el jugador " . $nombre . " no gano ninguna partida \n";
            }
            else{
                mostrarPartida(($indicePartidaGanadora + 1));
            }

        break;
        case '5': 
            //completar qué secuencia de pasos ejecutar si el usuario elige la opción 3

        break;
        case '6': 
            

        break;
        case '7': 
            echo"usted a elegido agregar una palabra a wordix :) \n";
            $nuevaPalabra = leerPalabra5Letras();
            $palabras = agregarPalabra($palabras, $nuevaPalabra);

        break;     
    }
} while ($opcion != 8);

