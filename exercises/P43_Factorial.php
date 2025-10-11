<?php

class P43_Factorial
{
    public function main(): void
    {
        // Write your program here
        $factorial = 1;
        echo "Give a number:\n";
        $n = (int)trim(fgets($GLOBALS['STDIN'] ?? STDIN));
        
        for($i = 1; $i <= $n; $i++){
            if($i === 1){
                $factorial = $i;
                 
            }else{
                $factorial = $factorial * $i;
            }
                    
        }
        echo "Factorial: ".$factorial . "\n";
    }
}
