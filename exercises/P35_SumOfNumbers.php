<?php

class P35_SumOfNumbers
{
    public function main(): void
    {
        // Write your code here
        $suma = 0;
        while(true){                        
            echo "Give a number:";
            $input = (int)trim(fgets($GLOBALS['STDIN'] ?? STDIN));
            if($input === 0){
                break;
            }elseif($input < 0){
                $suma+;
                continue;
            }
        }
        echo "Sum of negative numbers: ".$suma;       
    }
}
