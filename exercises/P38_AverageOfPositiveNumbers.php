<?php

class P38_AverageOfPositiveNumbers
{
    public function main(): void
    {
        // Write your program here
        $sum = 0;
        $count = 0;
        
        while(true){                        
            echo "Give a number:\n";
            $input = (float)trim(fgets($GLOBALS['STDIN'] ?? STDIN));

            if($input === 0.0){
                break;
            }
            if($input > 0.0){
                $sum+= $input;
                $count++;
                continue;
            }                       
        }
        if($sum > 0){
            $average = $sum / $count;
            echo $average."\n";    
        }else{
            echo "Cannot calculate the average\n";
        }
    }
}
