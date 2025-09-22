<?php

class P15_SquareRootOfSum {
    public function main(): void {
        // Define two numbers
        $numberA = 70;
        $numberB = 11;

        // Calculate and output the square root of their sum
        // Write the program here
        $suma = $numberA + $numberB;
        $resultSq = sqrt($suma);
        echo $resultSq."\n";
    }
}
