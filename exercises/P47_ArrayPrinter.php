<?php

class P47_ArrayPrinter
{
    public function main(): void
    {
        $array = [5, 1, 3, 4, 2];
        $this->printNeatly($array);
    }

    public function printNeatly(array $array): void
    {
        // Write your code here
        //La función implode() nos convierte el array a un string y el delimitador nos añade la coma y el espacio
        $output = implode(", ", $array);
        echo $output . "\n"; 
    }
}
