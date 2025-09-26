<?php

class P19_Positivity
{
    public function main(): void
    {
        // Write your code here
        // Prompt the user for input
        echo "Give a number: \n";
       
        // Get input from the user
        $input = trim(fgets($GLOBALS['STDIN'] ?? STDIN));

        // Check year value
        if((float)$input > 0){
            echo "The number is positive.\n";
        }else{
            echo "The number is not positive.\n";
        } 
    }
}
