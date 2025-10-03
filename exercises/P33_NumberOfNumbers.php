<?php

class P33_NumberOfNumbers
{
    public function main(): void
    {
        // Write your code here
        $count = 0;
        while(true){                        
            echo "Give a number:";
            $input = (int)trim(fgets($GLOBALS['STDIN'] ?? STDIN));
            if($input === 0){
                break;
            }else{
                $count++;
                continue;
            }
        }
        echo "Number of numbers: ".$count;
    }
}
