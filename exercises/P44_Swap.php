<?php

class P44_Swap
{
    public function main(): void
    {
        $array = [1, 3, 5, 7, 9];
    
        foreach ($array as $value) {
                echo $value . "\n";
        }

        echo "\n\n";

        // Write your code here

        
        //Leemos los datos que introduce usuario y los guardamos en variables convirtiendo a enteros
        $index1 = (int) trim(fgets(STDIN));
        $index2 = (int) trim(fgets(STDIN));

        //Comprobamos que no estén vacías las posiciones del array a intercambiar
        if (isset($array[$index1]) && isset($array[$index2])) {
            // Intercambio de las posiciones
            [$array[$index1], $array[$index2]] = [$array[$index2], $array[$index1]];
        }
 
        //Imprimimos la array con las posiciones cambiadas
        foreach ($array as $value) {
            echo $value;
        }
    }
}
