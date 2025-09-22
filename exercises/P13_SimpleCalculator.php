<?php

class P13_SimpleCalculator {
    public function main(): void {
        // Define two numbers
        $numA = 8;
        $numB = 2;

        // Perform and output the calculations
        // Write the program here
       
       $sum = $numA + $numB;
       echo $numA." + ".$numB." = ".$sum."\n";
       
       $dif = $numA - $numB;
       echo $numA." - ".$numB." = ".$dif."\n";

       $producto = $numB * $numA;
       echo $numA." * ".$numB." = ".$producto."\n";

       $quocient = $numA / $numB;
       echo $numA." / ".$numB." = ".number_format($quocient,1)."\n";
    }
}
