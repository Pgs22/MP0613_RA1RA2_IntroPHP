<?php

class P45_IndexWasNotFound
{
    public function main(): void
    {
        
        $array = [6, 2, 8, 1, 3, 0, 9, 7];

        // Write your code here
        echo "Search for? ";
        // Guardamos en la variable el número que introduce usuario y lo convertimos a entero
        $searchFor = (int) trim(fgets(STDIN));

        // Buscamos el número en el array y nos guardamos la posición en la variable
            // Con esta función array_search() nos devuelve la posición si encuentra el número, sino devuelve false
            // El (true) confirma que comparación exacta
        $index = array_search($searchFor, $array, true);

        // Si no devuelve false imprimimos también la posición
        if ($index !== false) {
            // El número sí existe
            echo $searchFor . " is at index " . $index . ".\n";
        } else {
            // El número no existe
            echo $searchFor . " was not found.\n";
        }
      
    }
}
