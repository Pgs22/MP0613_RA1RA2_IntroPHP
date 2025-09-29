<?php

class P21_LargerThanOrEqualTo
{
    public function main(): void
    {
        // Write your code here
        // Prompt the user for input
        echo "Give the first number:\n";


        // Get input from the user
        $numberF = (int)trim(fgets($GLOBALS['STDIN'] ?? STDIN));
        
        // Prompt the user for input
        echo "Give the second number:\n";
        
        // Get input from the user
        $numberS = (int)trim(fgets($GLOBALS['STDIN'] ?? STDIN));

        // Check year value
        if($numberF> $numberS){
            echo "Greater number is: ".$numberF;
        }elseif($numberF < $numberS){
            echo "Greater number is: ".$numberS;
        } else{
            echo "The numbers are equal!\n";
        }
    }
}
