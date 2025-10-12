<?php

class P46_SumOfArray
{
    public function main(): void
    {
        $array = [5, 1, 9, 4, 2];
        echo $this->sumOfNumbersInArray($array) . "\n";
    }

    public function sumOfNumbersInArray(array $array): int
    {
        // Write your code here
        $total = 0;
        
        foreach ($array as $number) {
            $total += $number; // Para sumar en cada vuelta el valor encontrado en el array
        }
        
        return $total;
    }
}
