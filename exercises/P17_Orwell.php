<?php

class P17_Orwell
{
    public function main(): void
    {
        // Prompt the user for input
        echo "Give a number: ";

        // Get input from the user
        $year = trim(fgets($GLOBALS['STDIN'] ?? STDIN));
        

        // Check if the input is exactly 1984
        // Write your code here

       if((int)$year === 1984){
        echo "Orwell\n";
       }
    }
}
