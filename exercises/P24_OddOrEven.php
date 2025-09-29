<?php

class P24_OddOrEven
{
    public function main(): void
    {
        // Write your code here
        echo "Give a number: \n";
        $number = (int)trim(fgets($GLOBALS['STDIN'] ?? STDIN));

        $resto = $number % 2;

        if($resto === 0){
            echo $number."\nNumber ".$number." is even.";
        } else{
            echo $number."\nNumber ".$number." is odd.";
        }
      
    }
}
