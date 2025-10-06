<?php

class P35_SumOfNumbers
{
    public function main(): void
    {
        // Write your code here
        $suma = 0;
        while(true){                        
            echo "Give a number:\n";
            $input = (int)trim(fgets($GLOBALS['STDIN'] ?? STDIN));

            if($input === 0){
                break;
            }
            if($input !== 0){
                $suma+= $input;
                continue;
            }
        }
        echo "Sum of the numbers: ".$suma."\n";       
    }
}
