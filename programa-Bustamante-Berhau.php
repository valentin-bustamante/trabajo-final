<?php
include_once("wordix.php");

/**************************************/
/***** DATOS DE LOS INTEGRANTES *******/
/**************************************/

/*
Berhau Gaston Gabriel - FAI-5585 - TUDW - gastonn.okk@gmail.com - gstNNN
Bustamante Valentin - FAI-5495 - TUDW - vbedits333@gmail.com - valentin-bustamante
*/


/**************************************/
/***** DEFINICION DE FUNCIONES ********/
/**************************************/

/**
 * FUNCION 1: Obtiene una colección de palabras 
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
    echo"\n\n  MENU \n\n";
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

 function mostrarPartida($arreglo,$numPartida){
    $indice = $numPartida - 1;
    

    echo" \n*********************************** \n";
    echo"PARTIDA WORDIX " . $numPartida . ": palabra " . $arreglo[$indice]["palabraWordix"] . "\n";
    echo"jugador: " . $arreglo[$indice]["jugador"] . "\n" ;
    echo"puntaje: " . $arreglo[$indice]["puntaje"] . " puntos \n";
    if ($arreglo[$indice]["intentos"] > 6) {
        echo"intento: no adivino la palabra \n";
    }
    else {
        echo"intento: adivino la palabra en " . $arreglo[$indice]["intentos"] . " intentos \n" ;
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
    $partidas = $arreglo;
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

/**
 * FUNCION 9: que dada la colección de par das y el nombre de un jugador, retorne el resumen del jugador
 * @return array
 * **/
function estadisticasJugador($nombre, $arreglo){
    //array $stats
    //int $intento1,$intento2,$intento3,$intento4,$intento5,$intento6,$totalPuntos,$totalPartidas,$cuenteo,$victorias
    //float $porcentajeVictorias
    $stats = [];
    $cuenteo = count($arreglo);
    $totalPartidas = 0;
    $totalPuntos = 0;
    $victorias = 0; 
    $porcentajeVictorias = 0;
    $intento1 = 0;
    $intento2 = 0;
    $intento3 = 0;
    $intento4 = 0;
    $intento5 = 0;
    $intento6 = 0;
    for($i=0; $i < $cuenteo; $i++){
        if($arreglo[$i]["jugador"] == $nombre) {
            $totalPartidas++;
            $totalPuntos = $totalPuntos + $arreglo[$i]["puntaje"];
            if($arreglo[$i]["intentos"] == 1){
                $intento1++;
            } elseif($arreglo[$i]["intentos"] == 2){
                $intento2++;
            } elseif($arreglo[$i]["intentos"] == 3){
                $intento3++;
            } elseif($arreglo[$i]["intentos"] == 4){
                $intento4++;
            } elseif($arreglo[$i]["intentos"] == 5){
                $intento5++;
            } elseif($arreglo[$i]["intentos"] == 6){
                $intento6++;
            }
                if($arreglo[$i]["puntaje"] > 0) { 
                $victorias++;    
      }
    }
  }
    if ($totalPartidas > 0) {
        $porcentajeVictorias = ($victorias * 100) / $totalPartidas;
    } 
    $stats["jugador"] = $nombre;
    $stats["partidas"] = $totalPartidas;
    $stats["puntajeTotal"] = $totalPuntos;
    $stats["victorias"] = $victorias;
    $stats["porcentajeVictorias"] = $porcentajeVictorias;
    $stats["intento1"] = $intento1;
    $stats["intento2"] = $intento2;
    $stats["intento3"] = $intento3;
    $stats["intento4"] = $intento4;
    $stats["intento5"] = $intento5;
    $stats["intento6"] = $intento6;
    return $stats;
}

/**
 * FUNCION 10 solicita al usuario el nombre de un jugador y retorna el nombre en minúsculas.
 * @return STRING
 * **/
function nombreMinusculas(){
    //STRING $nombreMinusculas, $nombre
    //BOOLEAN $esValido
    $nombreMinusculas = "";
    $esValido = false;
    do{
    echo"Ingrese un nombre para jugar a wordix: \n";
    $nombre = trim(fgets(STDIN));
    if(preg_match('/^[a-zA-Z]/', $nombre)){ //Analizo si el nombre comienza con una letra de la A, a la Z.
         $nombreMinusculas = strtolower($nombre); //Convierto el string en minusculas.
         $esValido = true;
       } else {
         echo"El nombre debe comenzar con una letra !Intentelo de nuevo!\n";
       }
    } while(!$esValido);
return $nombreMinusculas;
}

/**
 * FUNCION 11:
 */

 function ordenamiento($partidaA, $partidaB){
    if ($partidaA["jugador"] < $partidaB["jugador"]) {
        $orden = - 1;
    }
    elseif ($partidaB["jugador"] < $partidaA["jugador"]) {
        $orden = 1;
    }
    else{
        if ($partidaA["palabraWordix"] < $partidaB["palabraWordix"]) {
            $orden = -1;
        }
        else {
            $orden = 1;
        }
    }
    return $orden;
 }

/**************************************/
/*********** PROGRAMA PRINCIPAL *******/
/**************************************/

//Declaración de variables:
//INT
//FLOAT
//STRING
//BOLEAN
//ARRAY

//Inicialización de variables:
$palabras = [];
$partidas = [];
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
            $i = 0;
            $condicion = false;
            $elementos = count($palabras); // Cantidad de palabras disponibles
            $usuario = nombreMinusculas(); // Obtener el nombre del jugador en minúsculas
            
            echo "Ingrese un número para poder jugar. Dicho número representa la palabra que se usará para jugar:\n";
            $numeroElegido = solicitarNumeroEntre(1, $elementos);
            $palabraElegida = $numeroElegido - 1; // Convertir el número a índice de arreglo
            
            // Verificar si la palabra ya fue utilizada por el jugador
            while ($i < $elementos && !$condicion) {
                if (
                    isset($partidas[$i]) && // Validar que exista el índice en el array
                    $usuario == $partidas[$i]["jugador"] && 
                    $palabras[$palabraElegida] == $partidas[$i]["palabraWordix"]
                ) {
                    echo "Debe ingresar otro número, ya que la palabra elegida ya fue utilizada:\n";
                    $nuevoNumero = solicitarNumeroEntre(1, $elementos);
                    $palabraElegida = $nuevoNumero - 1; // Actualizar la palabra elegida
                    $i = 0; // Reiniciar la búsqueda desde el principio
                } else {
                    $i++;
                }
            }
            
            // Iniciar la partida con la palabra seleccionada
            $partida = jugarWordix($palabras[$palabraElegida], $usuario);
            
            // Guardar la nueva partida en el historial
            $partidas[] = $partida;
            
            // Mostrar los detalles de la partida
            print_r($partida);
            
        break;
        case '2': 
           
            $elementos = count($palabras);
            echo "Has elegido jugar a Wordix con una palabra aleatoria, ¡mucha suerte! :)\n";
            $usuario = nombreMinusculas(); // Obtener el nombre del jugador en minúsculas

            $palabraElegida = rand(0, $elementos - 1); // Seleccionar una palabra aleatoria
            $i = 0;
            $condicion = false;

            // Verificar que la palabra no haya sido utilizada por el jugador
            while ($i < count($partidas) && !$condicion) {
                
                if ($partidas[$i]["jugador"] === $usuario && $partidas[$i]["palabraWordix"] === $palabras[$palabraElegida]) {
                    // Si la palabra ya fue utilizada, selecciona otra y reinicia la búsqueda
                    $palabraElegida = rand(0, $elementos - 1);
                    $i = 0; // Reiniciar la búsqueda desde el principio
                } else {
                    $i++; // Continuar revisando partidas anteriores
                }
            }

            // Jugar Wordix con la palabra elegida
            $partida = jugarWordix($palabras[$palabraElegida], $usuario);

            // Guardar la nueva partida en el historial
            $partidas[] = $partida;

            // Mostrar los detalles de la partida
            print_r($partida);


        break;
        case '3': 
            $elementos = count($partidas);
            echo"ingrese un numero de partida para mostrar la misma por pantalla: ";
            $numero = solicitarNumeroEntre(1, $elementos);
           mostrarPartida($partidas, $numero);
        break;
        case '4': 
            echo"ingrese el nombre del jugador del cual desea visualizar su partida: ";
            $nombre = trim(fgets(STDIN));
            $indicePartidaGanadora = primerPartidaGanada($partidas , $nombre);
            if ($indicePartidaGanadora == -1) {
                echo"el jugador " . $nombre . " no gano ninguna partida \n";
            }
            else{
                mostrarPartida($partidas, ($indicePartidaGanadora + 1));
            }

        break;
        case '5': 
            echo"ingrese el nombre de un jugador para ver sus estadisticas: ";
            $name = trim(fgets(STDIN));
            $estadisticas = estadisticasJugador($name, $partidas);
            echo" \n*********************************** \n";
            echo"Jugador: " . $estadisticas["jugador"] . "\n";
            echo"Partidas: " . $estadisticas["partidas"] . "\n";
            echo"Puntaje Total: " . $estadisticas["puntajeTotal"] . "\n";
            echo"Victorias: " . $estadisticas["victorias"] . "\n";
            echo"Porcentaje Victorias: " . $estadisticas["porcentajeVictorias"] . "\n";
            echo"Adivinadas: \n";
            echo"Intento 1: " . $estadisticas["intento1"] . "\n";
            echo"Intento 2: " . $estadisticas["intento2"] . "\n";
            echo"Intento 3: " . $estadisticas["intento3"] . "\n";
            echo"Intento 4: " . $estadisticas["intento4"] . "\n";
            echo"Intento 5: " . $estadisticas["intento5"] . "\n";
            echo"Intento 6: " . $estadisticas["intento6"] . "\n";
            echo"*********************************** \n";


        break;
        case '6': 
            
            uasort($partidas, 'ordenamiento');
            print_r($partidas);

        break;
        case '7': 
            echo"usted a elegido agregar una palabra a wordix :) \n";
            $nuevaPalabra = leerPalabra5Letras();
            $palabras = agregarPalabra($palabras, $nuevaPalabra);
            echo"palabra agregada con exito";

        break;     
    }
} while ($opcion != 8);

