<?php

class P21_LargerThanOrEqualTo
{
    public function main(): void
    {
        // Write your code here
        // Prompt the user for input
        echo "Give the first number:\n";


        // Get input from the user
        $numberOne = trim(fgets($GLOBALS['STDIN'] ?? STDIN));
        
        // Prompt the user for input
        echo "Give the second number:\n";
        
        // Get input from the user
        $numbertwo = trim(fgets($GLOBALS['STDIN'] ?? STDIN));

        // Check year value
        if((int)$numberOne > (int)$numbertwo){
            echo "Greater number is: ";
        }elseif((int)$numberOne < (int)$numbertwo){
            echo "Greater number is: ";
        } else{
            echo "The numbers are equal!\n";
        }
    }
}
