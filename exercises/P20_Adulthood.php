<?php

class P20_Adulthood
{
    public function main(): void
    {
        // Write your code here
        // Prompt the user for input
        echo "How old are you?\n";
       
        // Get input from the user
        $input = trim(fgets($GLOBALS['STDIN'] ?? STDIN));

        // Check year value
        if((int)$input<18){
            echo "You are not an adult\n";
        }else{
            echo "You are an adult\n";
        }
       
    }
}
