<?php

class P23_AbsoluteValue
{
    public function main(): void
    {
        // Write your code here
        
        $number = (int)trim(fgets($GLOBALS['STDIN'] ?? STDIN));
        echo $number."\n";
        if(is_integer($number)){       
            echo $number."\n";                
        }else{
            $noInterger = $number * -1;
            echo $noInterger."\n";
        }
       
    }
}
