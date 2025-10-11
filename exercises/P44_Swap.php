<?php

class P44_Swap
{
    public function main(): void
    {
        $array = [1, 3, 5, 7, 9];


        // Write your code here
        $indicePos1 = -1; 
        $indicePos2 = -1;

        
        $inputUser = trim(fgets($GLOBALS['STDIN'] ?? STDIN)); 

        $indice2 = array_values(array_filter(explode(' ', $inputUser), 'trim'));


        if (count($indice2) >= 2) {
            // Asignamos los índices por posición (usando tu lógica original)
            $indicePos1 = (int)$indice2[0];
            $indicePos2 = (int)$indice2[1];
        } else {
            // Si no hay 2 índices, salimos del programa.
            return;
        }


        //Para situarnos en la ultima posicion del array (Ya sabemos el tamaño del array, pero es una buena práctica por cambios futuros)
        $maxIndex = count($array) - 1;
        //Primero comprobamos que las posiciones insertadas por el usuario existan
       if ($indicePos1 >= 0 && $indicePos1 <= $maxIndex && 
            $indicePos2 >= 0 && $indicePos2 <= $maxIndex) {            
            // Cambiamos los valores de posición            
            // Guardamos el valor actual en una variable temporal
            $temp = $array[$indicePos1];            
            // Ahora asignamos el valor de la posición 1 en la posición 2
            $array[$indicePos1] = $array[$indicePos2];            
            // Ahora usamos el valor guardado y lo asignamos a la posición inicial duplicada
            $array[$indicePos2] = $temp;
        }

        //Imprimimos la array con las posiciones cambiadas
        foreach ($array as $value) {
            echo $value . "\n";
        }
    }
}
