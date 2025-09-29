<?php

class P23_AbsoluteValue
{
    public function main(): void
    {
        // Write your code here        
        $number = (int)trim(fgets($GLOBALS['STDIN'] ?? STDIN));
 
        if((int)$number > 0){
            echo $number."\n";
        }else{
            $numberMultipliet = $number * -1;
            echo $numberMultipliet."\n";
        } 

    }
}
