<?php

class P21_LargerThanOrEqualTo
{
    public function main(): void
    {
        // Write your code here
        // Prompt the user for input
        echo "Give the first number:\n";


        // Get input from the user
        $numberOne = (int)trim(fgets($GLOBALS['STDIN'] ?? STDIN));
        
        // Prompt the user for input
        echo "Give the second number:\n";
        
        // Get input from the user
        $numbertwo = (int)trim(fgets($GLOBALS['STDIN'] ?? STDIN));

        // Check year value
        if($numberOne > $numbertwo){
            echo "Greater number is: ";
        }elseif($numberOne < $numbertwo){
            echo "Greater number is: ";
        } else{
            echo "The numbers are equal!\n";
        }
    }
}
