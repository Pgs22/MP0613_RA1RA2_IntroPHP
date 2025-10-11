<?php

class P44_Swap
{
    public function main(): void
    {
        $array = [1, 3, 5, 7, 9];

        foreach ($array as $value) {
            echo $value . "\n";
        }

        echo "\n";

        // Write your code here
        $indicePos1 = -1;
        $indicePos2 = -1;

        #echo "Give two indices to swap:\n";
        $inputUser= trim(fgets($GLOBALS['STDIN'] ?? STDIN));
        //Para separar los numeros explode()
        //Si hay espacios o un salto de línea, el array_filter('trim()') los elimina
        //array_values() para eliminar indices vacios colocando los valores de la posicion 0 hasta el ultimo que toque
        $indice2 = array_values(array_filter(explode(' ', $inputUser), 'trim'));

        /*
        //Ahora vamos a guardar los numeros del array en variables (También, podriamos usar la funcion array_shift() que extrae valor y elimina posicion)
        if (count($indice2) >= 2){ // Por si hay menos de un valor en el array que no de error
            $indicePos1 = (int)$indice2[0];
            $indicePos2 = (int)$indice2[1];
        }else{
            return;
        }
        */

        // Comprobar si no están los dos valores
        if (count($indice2) >= 2) {
            //Usamos array_shift() para extraer los índices y eliminarlos y se ajuste a los valores que hay, sin dejar vacíos
            $indicePos1 = (int)array_shift($indice2);
            $indicePos2 = (int)array_shift($indice2);
        } else {
            // Si no están los dos valores, salir del programa
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
        echo "\n";

    }
}
