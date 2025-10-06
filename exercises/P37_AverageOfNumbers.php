<?php

class P37_AverageOfNumbers
{
    public function main(): void
    {
        // Write your code here
        $sum = 0;
        $count = 0;
        
        while(true){                        
            echo "Give a number:\n";
            $input = (float)trim(fgets($GLOBALS['STDIN'] ?? STDIN));

            if($input === 0){
                break;
            }
            if($input !== 0){
                $sum+= $input;
                $count++;
                continue;
            }
            

        }
        
        if($count > 2) {
            $average = $sum / $count;
            echo "Average of the numbers: ".$average."\n";
        }
    }
}
